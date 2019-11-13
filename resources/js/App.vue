<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="success">
      <b-navbar-brand href="#">Nounou Manager</b-navbar-brand>
    </b-navbar>
    <div>{{$t('hello_world') }}</div>
    <router-view></router-view>
  </div>
</template>