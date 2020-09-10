<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Example Component</div>
          <div class="panel-body">
            Vue version {{ vue_version }} <br>
            Laravel build v{{ laravel_version }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        vue_version: Vue.version,
      }
    },
    props: {
      laravel_version: String,
    },
    mounted() {
      console.log('Component mounted.');
    }
  }
</script>
