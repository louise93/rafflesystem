<template>
    <div>
        <div class="alert alert-success" v-if="msg_type=='success'">
                <i class="mdi mdi-checkbox-marked-outline" v-if="msg_type=='success'"></i>
                  <i class="mdi mdi-close-octagon" v-else></i> {{ msg }}
        </div>
        <div class="alert alert-danger"  v-if="msg_type=='error'">
                <i class="mdi mdi-checkbox-marked-outline" v-if="msg_type=='success'"></i>
                <i class="mdi mdi-close-octagon" v-else></i> {{ msg }}
        </div>
       <form>
            <div class="form-group">
                        <label>No. of Tickets</label>
                        <input type="number" class="form-control" name="qty" v-model="qty" v-on:keyup="calculateAmount()">
            </div>
            <div class="form-group">
                        <label>Price</label>
                        <label class="form-control">$20</label>

            </div>
              <div class="form-group">
                        <label>Total</label>
                        <label class="form-control">{{ total }}</label>

            </div>
            <button type="button" class="btn btn-info pull-right" v-on:click="buyTicket()">Confirm</button>
        </form>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                    balance : "",
                    msg:"Success",
                    msg_type:"",
                    total : 0,
                    qty : "",
                    price : 20,
                    tickets : {}
            };
        },
        mounted() {

            //this.ticketList();

        },
         methods: {

             ticketList(){
                 axios.get("list").then(response => {
                    this.tickets = response.data;
                });
             },
             calculateAmount() {
                 this.total = this.qty * this.price;
             },
             buyTicket() {

                 axios.post('confirm',
                         {
                             'qty' : this.qty
                          }
                          ).then(response => {

                                this.qty = '' ;
                                this.total = 0;


                                  this.msg_type = response.data.msg_type;
                                 this.msg = response.data.msg;
                        });
             }

         }
    }
</script>
