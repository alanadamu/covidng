<template>
  <div class="card border-0 bg-gradient-info" :class="bgcolor">
    <!-- Card body -->
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-uppercase mb-0 text-white">
            <slot></slot>
          </h5>
          <span class="h2 font-weight-bold mb-0 text-white"
            >{{ value }} {{ limitString }}</span
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    bgcolor: String,
    value: String,
    limit: {
      type: String,
      required: false
    }
  },
  computed: {
    limitString() {
      return this.limit ? "of " + limit : "";
    }
  }
};
</script>

<style lang="scss" scoped>
</style>