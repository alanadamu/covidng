<template>
  <div>
    <router-view :key="$route.fullPath"></router-view>
  </div>
</template>

<script>
export default {
  methods: {},
  mounted: function() {}
};
</script>

<style lang="scss"></style>
