<template>
  <footer class="footer">
    <div class="container-fluid">
      <div class="copyright">
        © {{ year }} made with <i class="tim-icons icon-heart-2"></i> by
        <a href="" target="_blank">Afivenet</a> - Stay Safe
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  data: function() {
    return {
      year: new Date().getFullYear()
    };
  }
};
</script>
<style>
</style>
