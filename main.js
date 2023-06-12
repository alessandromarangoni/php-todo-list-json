const { createApp } = Vue

createApp({
    data() {
        return {
            aggiungi:"",
            title: 'To Do List!',
            apiUrl:'api.php',
            lista:[],
            }
    },
    mounted() {
        this.call()
    },
    methods: {
        call(){
            axios.get(this.apiUrl).then((r) => {
                this.lista.push(r.data);
                console.log(this.lista)
            })
        },
        addTask(){
            this.lista[0].push(this.aggiungi);
            this.aggiungi="";
        }
    },
}).mount('#app')