Vue.component('pokemon', {
    props: ['idPok'],
    template: `<img 
    v-bind:src="'../files/pokemon_image/pokemon_image/{{idPok}}.png'"
    />
    `
});

new Vue({
    el: '#app',
    data: {
        pokemon: []
    },
    mounted() {
        axios.
            get('http://localhost:8000/api/pokedexes/')
            .then(response => {
            // JSON responses are automatically parsed.
                console.log(response.data["hydra:member"].forEach(element => {
                    this.pokemon.push(element);
                    console.log(this.pokemon)
                }));
            })
            .catch(e => {
                this.errors.push(e)
            })
    },
    methods: {
        close: function() {
            this.success = false
        },
        style: function() {
            if(this.success) {
                return {background: 'pink'};
            } else {
                return {background: 'green'};
            }
        }
    }
})