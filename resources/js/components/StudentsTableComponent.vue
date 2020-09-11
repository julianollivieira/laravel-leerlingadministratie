<template>
  <v-card>
    <v-card-title>
      Studenten
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="students"
      :search="search"
      :loading="loading"
    ></v-data-table>
  </v-card>
</template>

<script>
  export default {
    data () {
      return {
        loading: true,
        search: '',
        headers: [
          {
            text: 'Roepnaam',
            align: 'start',
            sortable: true,
            value: 'roepnaam',
          },
          { text: 'Voorvoegsel', value: 'voorvoegsel' },
          { text: 'Achternaam', value: 'achternaam' },
          { text: 'Voorletters', value: 'voorletters' },
          { text: 'Officielenaam', value: 'officielenaam' },
          { text: 'Postcode', value: 'postcode' },
          { text: 'Huisnummer', value: 'huisnummer' },
          { text: 'Toevoeging', value: 'toevoeging' },
          { text: 'Woonplaats', value: 'woonplaats' },
        ],
        students: [],
      }
    },
    mounted(){
      axios.get('/api/students').then(response => {
        this.students = response.data;
        this.loading = false;
      }).catch(error => {
        console.log(error);
      });
    },
  }
</script>
