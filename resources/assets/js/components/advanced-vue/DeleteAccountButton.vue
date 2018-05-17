<template>
  <button type="button"
    @click="confirmDeleteModalOpen = true"
  >
    
    <slot> Delete Account </slot>
   
      <confirm-delete-modal
        :show="confirmDeleteModalOpen"
        @close="confirmDeleteModalOpen = false"
        :account-id="accountId"
        v-if="confirmDeleteModalOpen"
      />
   
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
