<template>
  <footer class="footer">
    <div class="container-fluid">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="http://www.creative-tim.com">
            Creative Tim
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://blog.creative-tim.com">
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.creative-tim.com/license">
            Licenses
          </a>
        </li>
      </ul>
      <div class="copyright">
        © {{ year }} by <a href="" target="_blank">Afivenet</a> for a more
        informed world.
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
