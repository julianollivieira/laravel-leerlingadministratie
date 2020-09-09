<template>
  <div class="w-25">
    <div class="form-group">
      <label for="exampleInputEmail1">E-mailadres</label>
      <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Uw e-mailadres">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Wachtwoord</label>
      <input v-model="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Uw wachtwoord">
    </div>
    <button v-on:click="login" class="btn btn-primary">Inloggen</button>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        email: '',
        password: '',
        error: '',
      }
    },
    methods: {
      login: function () {
        axios.post('/api/login', {
          email: this.email,
          password: this.password,
        }).then(function (response) {
          if(response.data.status == "success"){
            window.location.replace("/");
          } else {
            console.log(response.data.error);
          }
        }).catch(function (error) {
          console.log(error);
        });
      },
    },
  }
</script>
