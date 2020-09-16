<template>
  <v-data-table
    :headers="headers"
    :items="students"
    sort-by="calories"
    class="elevation-1"
    :loading="loading"
  >
    <template v-slot:top>
      <v-toolbar flat color="white">
        <v-toolbar-title>Studenten beheren</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog" max-width="500px">
          <template v-slot:activator="{ on, attrs }">
            <v-btn
              color="primary"
              dark
              class="mb-2"
              v-bind="attrs"
              v-on="on"
            >Student toevoegen</v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">{{ formTitle }}</span>
            </v-card-title>
            <v-card-text>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6" md="4" v-for="header in headers" :key="header.value">
                    <v-text-field v-model="editedItem[header.value]" v-bind:label="header.text"></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
            </v-card-text>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="save">Opslaan</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:item.actions="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    <template v-slot:no-data>
      <v-btn color="primary" @click="initialize">Reset</v-btn>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    data: () => ({
      loading: true,
      dialog: false,
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
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      students: [],
      editedIndex: -1,
      editedItem: {
        name: '',
        calories: 0,
        fat: 0,
        carbs: 0,
        protein: 0,
      },
      defaultItem: {
        name: '',
        calories: 0,
        fat: 0,
        carbs: 0,
        protein: 0,
      },
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'Nieuwe student' : 'Student bewerken'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
    },

    created () {
      this.initialize()
    },

    methods: {
      initialize () {
        axios.get('/api/studenten').then(response => {
          this.students = response.data;
          this.loading = false;
        }).catch(error => {
          console.log(error);
        });
      },

      editItem (item) {
        this.editedIndex = this.students.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (item) {
        const index = this.students.indexOf(item)
        confirm('Are you sure you want to delete this item?') && this.students.splice(index, 1)
      },

      close () {
        this.dialog = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },

      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.students[this.editedIndex], this.editedItem)
        } else {
          this.students.push(this.editedItem)
        }
        this.close()
      },
    },
  }
</script>
