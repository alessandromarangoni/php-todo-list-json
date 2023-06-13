const { createApp } = Vue

createApp({
    data() {
        return {
            class:'text-white',
            done:'non fatto',
            index:null,
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
        // chaiama l api e prende dati
        call(){
            axios.get(this.apiUrl).then((r) => {
                this.lista[0] = r.data;
                // console.log(this.lista[0].list[0].name)
                // console.log(this.lista)
            })
        },
        // aggiunge un elemento alla lista
        addTask() {
            const data = {aggiungi: {
                            name : this.aggiungi,
                            done : this.done}};
            this.sendTask(data);
        },
        // gestisce la chiamata post
        sendTask(data){
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data',
                            'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.lista[0] = response.data;
                this.aggiungi = "";
            });
        },
        deleteTask(i) {
            const data = { deleteIndex : i };
            this.sendTask(data);
        },
    },
}).mount('#app')