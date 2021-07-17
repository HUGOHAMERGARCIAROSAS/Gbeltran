<template>
    <div>
        <div class="row">
                    <div class="col-md-4">
                        <label>Fecha</label>
                        <input class="form-control form-control-sm" type="date" >
                    </div>
                    <div class="col-md-4">
                        <label>Tipo Gasto Operativo</label>
                        <select @change="ObtenerGastos()" v-model="tipoComprobante" class="form-control form-control-sm" name="tipoGasto" id="tipoGasto">
                            <option value="0">SELECCIONAR</option>
                            <option value="1">CON COMPROBANTE</option>
                            <option value="2" selected>SIN COMPROBANTE</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                                    <label>Gasto Operativo</label>
                                    <select class="form-control form-control-sm" name="gastos" id="gastos">
                                        <option v-for="(gasto,index) in gastos" :value="gasto.id"  >{{gasto.descripcion}}</option>
                                    </select>
                    </div>
                   
        </div>
        <div class="row" >
                    <div class="col-md-4">
                        <label>Importe</label>
                        <input class="form-control form-control-sm" type="text" >
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control form-auth-sm" style="margin-top: 20px">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class=" btn btn-success" style="margin-top: 23px"><i class="fa fa-plus"></i></button>
                    </div>
        </div>
        <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Gasto Operativo</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                    </tr>                            
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
           
    </div>
</template>
<script>
export default {
    data() {
        return{
            tipoComprobante:"2",
            gastos:[]
        }
    },
    methods:{
        ObtenerGastos(){
            this.gastos.splice(0);
            if(this.tipoComprobante!=0){
                axios.get('gastosTipo/'+this.tipoComprobante)
                .then(res=>{
                    for(var value of res.data){
                        this.gastos.push({
                            id:value.id,tipo:value.tipo,descripcion:value.descripcion
                        })
                    }
               })
            }  
        }
    }
}
</script>
