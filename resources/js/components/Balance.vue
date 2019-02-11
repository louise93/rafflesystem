<template>
    <div>     
         <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 success-gradient">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-white mb-0">Deposited Today<span class="text-white float-right"><i class="material-icons icon-sm">arrow_drop_up</i> $ 0.00   </span></p>
                                    <h4 class="mb-3">$  {{ deposited_today }}</h4>
                                </div>
                            </div>
                            <div class="progress progress-small bg-light-white">
                                <div class="progress-bar bg-white col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 warning-gradient">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon-rounded icon-50 bg-light-white mr-3">
                                    <i class="material-icons">cloud_upload</i>
                                </div>
                                <div class="media-body">
                                    <p class="text-white mb-0">Total Deposits</p>
                                    <h4 class="text-white mb-3">$ {{ total_deposited }}</h4>
                                </div>
                            </div>
                            <div class="progress progress-small bg-light-white">
                                <div class="progress-bar bg-white col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 danger-gradient">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon-rounded icon-50 bg-light-white mr-3">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                                <div class="media-body">
                                    <p class="text-white mb-0">Wallet Balance</p>
                                    <h4 class="text-white mb-3">$ {{ balance }}</h4>
                                </div>
                            </div>
                            <div class="progress progress-small bg-light-white">
                                <div class="progress-bar bg-white col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
              <div class="col-md-6 col-lg-6">
                  <div class="card warning-gradient">
                       
                        <div class="card-body">
                            <canvas id="canvas" height="270">
                            </canvas>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 col-lg-6 scroll">
            <div class="card ">
                <div class="card-header pink-gradient">
                    <div class="media w-100 ">
                        <figure class="avatar avatar-40 rounded-circle align-self-start ">
                            <!-- <img src="userpanel/img/user1.png" alt=""> -->
                        </figure>
                        <div class="media-body">
                            <h5 class="time-title mb-0  text-white">Tickets No.</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                   
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 px-0 ">
                            <div class="list-group border-top border-bottom list-group-flush" id="chatlist" style="height: 426.094px;"  >
                                    <center><label>Your Tickets :</label></center>
                                <div class="list-group-item new" v-for="ticket in tickets" v-bind:key="ticket.id">
                                    <div class="media">
                                        <div class="media-body">
                                                <center>
                                                 <button type="button" class="btn btn-success btn-circle btn-lg" style=" border-radius: 35px; text-align: center;">{{ ticket.ticket_number }}</button> 
                                                </center>
                                         </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                         <div class="col-12 col-md-6 col-lg-6 px-0 ">
                            <div class="list-group border-top border-bottom list-group-flush" id="chatlist" style="height: 426.094px;"  >
                                    <center><label>Tickets Recently Bought :</label></center>
                                <div class="list-group-item new" v-for="recentTickets in recentTickets" v-bind:key="recentTickets.id">
                                    <div class="media">
                                        <div class="media-body">
                                                <center>
                                                 <button type="button" class="btn btn-success btn-circle btn-lg" style=" border-radius: 35px; text-align: center;">{{ recentTickets.ticket_number }}</button> 
                                                </center>
                                         </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                     
        </div>
        
    </div>
</template>
<script>
     import {Chart} from 'Chart.js';
    export default {
        data() {
            return {
                    balance : "",
                    username : "",
                    deposited_today : 0 ,
                    total_deposited : 0 ,
                    recentTickets : [],
                    tickets : [],
                    btn: true
            };
        },
        props: {
            labels: String,
            dataProp: String
        },
        mounted() {
                this.getBalance();
                this.getDeposited();
                this.renderChart();
                this.getTickets();
                this.getrecentTickets();
        },
         methods: {
             
            getBalance() {
               setInterval(() => {
                axios.get("balance").then(response => {
                    this.balance = response.data;
                });
               },3000);
            },
             getDeposited() {
               setInterval(() => {
                axios.get("deposithistory").then(response => {
                    this.deposited_today = response.data.today;
                    
                    this.total_deposited = response.data.total_deposits;
                });
               },3000);
            },
             renderChart() {
                new Chart(document.getElementById('canvas').getContext('2d'), {
                    type: 'pie',
                    data: {
                        labels: JSON.parse(this.labels),
                        datasets: [{
                            data: JSON.parse(this.dataProp),
                            backgroundColor: [
                                '#2ecc71',
                                '#e74c3c',
                               
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            fontSize: 22,
                            text: 'TICKET SOLD'
                        }
                    }
                });
            },
            getTickets(){
                    axios.get("gettickets").then(response => {
                     this.tickets = response.data;
                });
            },
             getrecentTickets(){

                  setInterval(() => {
                    axios.get("getticketsrecent").then(response => {
                     this.recentTickets = response.data;
                });
                 },3000);
            }
         }
    }
</script>