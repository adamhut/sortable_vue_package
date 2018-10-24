<template>
  <button type="button"
    @click="LoadExternalContentModalOpen = true"
  >
    
    <slot> Delete Account </slot>
   
      <load-external-content-modal
        :show="LoadExternalContentModalOpen"
        @close="LoadExternalContentModalOpen = false"
        :account-id="passId"
        v-if="LoadExternalContentModalOpen"
      />
   
  </button>
</template>

<script>
import LoadExternalContentModal from "./LoadExternalContentModal.vue"

export default {
  components: {
    LoadExternalContentModal
  },
  props: ["accountId"],
  data() {
    return {
      passId:1,
      LoadExternalContentModalOpen: false,
    }
  }
}
</script>
