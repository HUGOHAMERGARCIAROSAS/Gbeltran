<template>
    <div>
        <div class="row">
                    <div class="col-md-6">
                      <label>Forma de pago</label>
                      <select class=" form-control form-control-sm" @change="onChange()" v-model="tipoPago" id="tipoPago" name="tipo">
                        <option value="1">Efectivo</option>
                        <option value="2">Cuenta</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Importe</label>
                      <input class=" form-control form-control-sm" name="deposito">
                  </div>
        </div>
        <div class="row" id="divNumeroCuenta" 
        :style="{'display':tipoPago==1 ? 'none' : 'block' }"> 
                    <div class="col-md-6">
                        <label>Número de cuenta</label>
                        <input class=" form-control form-control-sm" name="cuenta">
                    </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            tipoPago:"1"
        }
    },
    methods:{
        onChange(){
            console.log(this.tipoPago);
            if(this.tipoPago){

            }else{

            }
        }
    }
    
}
</script>
