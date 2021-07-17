const saldo=new Vue({
    el: '#saldo',
    data: {
        titulo: 'Hola mundo con vue',
        vehiculos:[
            {placa:'dsce',carreta:10},
            {placa:'edef',carreta:0},
            {placa:'efef',carreta:11}
        ],
        nuevoVehiculo:'',
        carreta:'',
        total:0
    },
    methods:{
        agregarAuto (){
            this.vehiculos.push({
                placa:this.nuevoVehiculo,carreta:this.carreta
            })
            this.nuevoVehiculo='',
            this.carreta=''
        }
    },
    computed:{
        sumarFrutas(){
            this.total=0;
            for(vehiculo of this.vehiculos){
                this.total += vehiculo.carreta;
            }
            return this.total;
        }
    }
})