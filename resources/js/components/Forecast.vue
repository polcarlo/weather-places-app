<template>
    <div>
         <Navbar/>
        <b-container fluid="md">
            <b-row class="text-center">
        <b-col></b-col>
        <b-col cols="8">
            <b-form @submit="onSubmit">
                <b-form-group id="input-group-2" label="Search Forecast For Japan Cities" label-for="input-2">
                    <b-form-input
                    id="input-2"
                    v-model="form.city"
                    required
                    placeholder="Enter Japan City"
                    ></b-form-input>
                </b-form-group>
                <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>
            <div v-if="showLoading">
                <b-img src="img/loading.gif" fluid alt="Fluid image"></b-img>
            </div>
            <div v-if="showResult">

                <div v-if="lists.data == 404">
                    <h1>Wrong City name in Japan</h1>
                    <h3>Please Try Again</h3>
                </div>
                <table class="table table-border" v-else>
                    <tr>
                        <th>Date</th>
                        <th>Temperature</th>
                        <th>Wind Speed</th>
                        <th>Humidity</th>
                        <th>Sea Level</th>
                    </tr>
                    <tbody v-for="(list, key, list_index) in lists" :key="list_index">
                        <tr v-for="(datas, key, data_index) in list.list" :key="data_index">     
                            <td>{{datas.dt_txt}}</td>
                            <td>{{datas.main.temp}}</td>
                            <td>{{datas.wind.speed}}</td>
                            <td>{{datas.main.humidity}}</td>
                            <td>{{datas.main.sea_level}}</td>
                        </tr>
                    </tbody>
                </table>
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
          city: '',
        },
      }
    },
    computed: {
           ...mapFields('Forecast', ['showResult','lists','showLoading']),
    },
    methods: {
        ...mapActions('Forecast', ['getForecast']),

        async onSubmit(evt) {
            evt.preventDefault();
            this.showResult = false;
            this.showLoading = true;
            await this.getForecast(this.form.city)
            this.showResult = true;
            this.showLoading = false;
        },
    },
     components: {
      Navbar
    }
}
</script>
