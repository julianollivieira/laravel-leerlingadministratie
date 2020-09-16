<template>
  <v-data-table
    :headers="headers"
    :items="klassen"
    :search="search"
    :loading="loading"
  >
    <template v-slot:top>
      <v-toolbar flat color="white">
        <v-toolbar-title>Klassen bekijken</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
      </v-toolbar>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    data () {
      return {
        loading: true,
        search: '',
        headers: [
          {
            text: 'Klas',
            align: 'start',
            sortable: true,
            value: 'klas',
          },
        ],
        klassen: [],
      }
    },
    created () {
      this.initialize()
    },
    methods: {
      initialize () {
        axios.get('/api/klassen').then(response => {
          this.klassen = response.data;
          this.loading = false;
        }).catch(error => {
          console.log(error);
        });
      },
    },
  }
</script>
