<template>
  <div class="header bg-primary pb-0">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">{{ title }}</h6>
            <nav
              aria-label="breadcrumb"
              class="d-none d-md-inline-block ml-md-4"
            >
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item">
                  <a href="http://127.0.0.1:8000/dashboard"
                    ><i class="fas fa-home"></i
                  ></a>
                </li>
                <!-- <li class="breadcrumb-item">
                  <a href="http://127.0.0.1:8000/user">User Management</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <div class="btn btn-sm btn-neutral">
              <router-link
                :to="{
                  name: routeName,
                  params: routeParams
                }"
                >{{ routeTitle }}</router-link
              >
            </div>

            <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    },
    routeTitle: {
      type: String
    },
    routeName: {
      type: String
    },
    routeParams: {
      type: Object
    }
  }
};
</script>

<style lang="scss" scoped>
</style>