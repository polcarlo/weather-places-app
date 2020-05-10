<template>
    <div>
         <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Weather</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item ><router-link to="/" class="navigation-design">Home</router-link></b-nav-item >

      <b-nav-item ><router-link to="/forecast" class="navigation-design">Forecast</router-link></b-nav-item >
      <b-nav-item ><router-link to="/place" class="navigation-design">Place</router-link></b-nav-item >
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>


    </div>
</template>

<script>
export default {
    name: 'Navbar'
}
</script>