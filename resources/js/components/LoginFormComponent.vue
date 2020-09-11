<template>
  <v-form ref="form" v-model="valid" lazy-validation>
    <v-text-field v-model="email" :rules="emailRules" label="E-mail" required outlined></v-text-field>
    <v-text-field v-model="password" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" :rules="passwordRules" :type="show1 ? 'text' : 'password'" label="Wachtwoord"
            @click:append="show1 = !show1" outlined required></v-text-field>
    <v-btn :disabled="!valid" color="success" class="mr-4" @click="validate">Inloggen</v-btn>
    <v-btn color="error" class="mr-4" @click="reset">Reset</v-btn>
    <p class="red--text mt-4" v-if="error" v-text="error"></p>
  </v-form>
</template>

<script>
  export default {
    data: () => ({
      show1: false,
      valid: true,
      error: null,
      password: '',
      passwordRules: [
          v => !!v || 'Password is required.',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
    }),
    methods: {
      validate () {
        if(this.$refs.form.validate()){
          axios.post('/api/login', {
            email: this.email,
            password: this.password,
          }).then(response => {
            if(response.data.status == 'success'){
              window.location.replace("/");
            } else {
              this.error = response.data.error;
            }
          }).catch(error => {
            console.log(error);
          });
        }
      },
      reset () {
        this.$refs.form.reset()
      },
    },
  }
</script>


<!-- <template>
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
</template> -->
<!-- <script>
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
</script> -->
