<template>
  <v-container fluid class="ma-0 pa-0">
    <v-card max-height="65vh" class="ma-0 pa-0" height="100%">
      <v-row class="ma-0 pa-0">
        <v-col cols="8">
          <v-card-text>Liste message</v-card-text>
        </v-col>
        <v-col class="d-flex flex-column align-center pa-0 ma-0" cols="4">
          <v-card
            v-for="friend in friends"
            :key="friend.name"
            width="100%"
            outlined
            color="#385F73"
            class="d-flex align-center ma-0 pa-0 rounded-0"
            height="100%"
          >
            <v-list-item-avatar color="grey"></v-list-item-avatar>
            <p class="ma-0 pa-0">{{ friend.name }}</p>
          </v-card>
        </v-col>
      </v-row>
      <v-row class="ma-0 pa-0">
        <v-col cols="8">
          <v-text-field class="px-2" label="Taper votre message"></v-text-field>
        </v-col>
        <v-col cols="4" class="ma-0 pa-0">
          <v-card
            width="100%"
            outlined
            color="#385F73"
            class="d-flex align-center ma-0 pa-0 rounded-0"
            height="100%"
          >
            <v-autocomplete class="px-2" label="rechercher un ami"></v-autocomplete>
          </v-card>
        </v-col>
      </v-row>
    </v-card>
  </v-container>
</template>

<script src="./Chat.js"></script>