<template>
  <v-data-table
    :headers="headers"
    :items="vakken"
    :search="search"
    :loading="loading"
  >
    <template v-slot:top>
      <v-toolbar flat color="white">
        <v-toolbar-title>Vakken bekijken</v-toolbar-title>
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
            text: 'Vak',
            align: 'start',
            sortable: true,
            value: 'vak',
          },
        ],
        vakken: [],
      }
    },
    created () {
      this.initialize()
    },
    methods: {
      initialize () {
        axios.get('/api/vakken').then(response => {
          this.vakken = response.data;
          this.loading = false;
        }).catch(error => {
          console.log(error);
        });
      },
    },
  }
</script>
