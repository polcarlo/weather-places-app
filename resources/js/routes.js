import Home from './components/Home.vue';
import Forecast from './components/Forecast.vue';
import Place from './components/Place.vue';
export const routes = [
    {
        path: '/',
        name: 'Home',
        component : Home
    },
    {
        path: '/forecast',
        name: 'forecast',
        component : Forecast
    },
    {
        path: '/place',
        name: 'place',
        component : Place
    }
];
