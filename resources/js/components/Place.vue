<template>
    <div>
         <Navbar/>
        <b-container fluid="md">
            <b-row class="text-center">
        <b-col></b-col>
        <b-col cols="8">
            <b-form @submit="onSubmit">
                <b-form-group id="input-group-2" label="Search Places For Japan Cities" label-for="input-2">
                    <b-form-input
                    id="input-2"
                    v-model="form.near"
                    required
                    placeholder="Enter Japan City"
                    ></b-form-input>
                         <div v-if="category.response">
                             <label>Categories</label>
                    <select class="form-control" v-model="form.category">
                        <option v-for="(cat, key, category_index) in category.response.categories" :key="category_index" :value="cat.id">{{cat.name}}</option>
                    </select>
                </div>
                <div v-else>
                    <b-img src="img/cat.gif"></b-img><h4>Wait for categories</h4>
                </div>
                </b-form-group>
           
                <br/>
                <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>
            <div v-if="showLoading">
                <b-img src="img/loading.gif" fluid alt="Fluid image"></b-img>
            </div>
            <div v-if="showResult">

                <div v-if="place.data == 400">
                    <h1>Wrong City name in Japan</h1>
                    <h3>Please Try Again</h3>
                </div>

                <div v-else>
                    <table class="table table-border">
                    <tr>
                        <th>Venue Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postal Code</th>
                    </tr>
                    <tbody v-for="(list, key, list_index) in place.data.response.groups" :key="list_index">
                        <tr v-for="(item, key, item_index) in list.items" :key="item_index">
                            <td>{{item.venue.name}}</td>
                            <td>{{item.venue.location.address}}</td>
                            <td>{{item.venue.location.city}}</td>
                            <td>{{item.venue.location.state}}</td>
                            <td>{{item.venue.location.postalCode}}</td>
                            </tr>
                        
                    </tbody>
                </table>
                   
                </div>
               
            </div>
            </b-col>
            <b-col></b-col>
        </b-row>
    </b-container>
    </div>
</template>

<script>
    import Navbar from './Layout/Navbar.vue';
    import { mapState, mapGetters, mapActions, mapMutations } from 'vuex'
    import { mapFields } from 'vuex-map-fields'

export default {
    name: 'Forecast',
    data() {
      return {
        form: {
          near: '',
          category: '',
        },
      }
    },
    async mounted(){
            await this.getCategory()
        },
    computed: {
           ...mapFields('Place', ['showResult','category','showLoading','place']),
    },
    methods: {
          ...mapActions('Place', ['getCategory','getPlaces']),

        async onSubmit(evt) {
            let nearAndCategory = this.form.near+'-'+this.form.category;
        
            evt.preventDefault();
            this.showResult = false;
            this.showLoading = true;
            await this.getPlaces(nearAndCategory);
            this.showResult = true;
            this.showLoading = false;
        },
    },
     components: {
      Navbar
    }
}
</script>
