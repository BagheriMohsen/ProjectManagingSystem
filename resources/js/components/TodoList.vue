<template>

   <div id="todolist">

       <div class="create_todo">
           <div class="row">
               <div class="col-12 col-sm-6">
                   <form action="#">
                        <div class="md-form input-group mt-0 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="material-addon1">
                                  <a href="#" @click.prevent="addTodo">
                                      <i class="fas fa-plus fa-2x"></i>
                                  </a>
                                </span>
                            </div>
                            <input v-model="todoInput" type="text" class="form-control" placeholder="Write todo..." aria-label="Todo" aria-describedby="material-addon1">
                        </div>
                    </form>
               </div>
           </div>
       </div>

       <div class="active_todo">
            <h6 class="mb-1">Todo List:</h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked"></label>
                        </div>
                        Cras justo odio
                    </div>
                    <a href="#">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </a>
                </li>
            </ul>
       </div>

       <div class="done_todo">
           <h6 class="mb-1 mt-3">Done List:</h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center" style="text-decoration-line: line-through;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked1">
                            <label class="form-check-label" for="materialUnchecked1"></label>
                        </div>
                        Cras justo odio
                    </div>
                    <a href="#">
                        <i class="fas fa-trash fa-lg tx-danger"></i>
                    </a>
                </li>
            </ul>
       </div>

   </div>

</template>

<script>
    export default {
        data(){
            return{
                inputTodo:''
            }
        },
        methods:{
            addTodo(){
                this.$http.post('todolist/store',{
                    'user_id' : 1,
                    'desc':this.inputTodo
                })
                .then(res=>console.lgo(res))
                .catch(err=>console.log(err));
            }
        },
        mounted() {
            console.log('Componefdsafdsnt mounted.')
        }
    }
</script>
