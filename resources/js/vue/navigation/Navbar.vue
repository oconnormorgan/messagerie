<template>
  <v-row>
    <v-col>
      <v-card class="pa-5 d-flex flex-row align-items-center" outlined tile>
        <h2 class="d-flex flex-fill p-2 h-100">CHATMESS</h2>
        <div class="d-flex flex-row">
          <v-btn class="padding d-flex" text to="/">Accueil</v-btn>
          <!-- 'to' utilise les component de view -->
          <v-btn class="padding d-flex" text to="/login">Login</v-btn>
          <v-btn class="padding d-flex" text @click="logout">deconnexion</v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import { authenticationService } from "../../_services/authentication.service";
import router from "../router";
export default {
  methods: {
    logout() {
      authenticationService.logout();
      router.push("/login");
    }
  }
};
</script>