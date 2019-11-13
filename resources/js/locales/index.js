import Vue     from 'vue';
import VueI18n from 'vue-i18n';
Vue.use(VueI18n);

// Import locales
import fr from './fr_FR';

export default new VueI18n({
  locale: 'fr', // set locale
  messages: {
    fr
  }
})