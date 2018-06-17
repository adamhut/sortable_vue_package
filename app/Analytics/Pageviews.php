<?php 
namespace App\Analytics;

use Illuminate\Support\Facades\Cache;

use DB;
use App\User;
use App\Pageview;

class Pageviews implements Views{

	protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function daysBack($days, $domain= null,$customer = null)
    {
        
          //Get very beginning of the day, $date days ago

            $date = new \DateTime(date('Y-m-d', strtotime('-' . $days . 'days')));

            $query = Pageview::select(DB::raw('COUNT(*) as daily_total,DATW(created_at) as date'))
                ->where('user_id', $this->user->id)
                ->where('created_at', '>=', $date)
                ->groupBy('date')
                ->orderBy('date', 'asc');

            if ($domain) $query->where('domain', $domain);

            if ($customer) $query->where('customer_id', $customer);

            return $query->get();

            //return Db::table('user')->get();
        

    }


    public function domains()
    {

        return Pageview::select(DB::raw('DISTINCT domain'))
            ->where('user_id',$this->user->id)
            ->get()
            ->pluck('domain')
            ->toArray();
    }

}