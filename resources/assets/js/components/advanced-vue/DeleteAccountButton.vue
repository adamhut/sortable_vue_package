<template>
  <button type="button"
    class="text-red-dark hover:underline"
    @click="confirmDeleteModalOpen = true"
  >
    
    <slot> Delete Account </slot>
    <portal to="modals" v-if="confirmDeleteModalOpen">
        <confirm-delete-modal
            :show="confirmDeleteModalOpen"
            @close="confirmDeleteModalOpen = false"
            :account-id="accountId"
            v-if="confirmDeleteModalOpen"
        />
    </portal>
   
  </button>
</template>

<script>
import ConfirmDeleteModal from "./ConfirmDeleteModal.vue"

export default {
  components: {
    ConfirmDeleteModal
  },
  props: ["accountId"],
  data() {
    return {
      confirmDeleteModalOpen: false
    }
  }
}
</script>
