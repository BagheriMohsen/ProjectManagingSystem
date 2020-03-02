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
                <li class="list-group-item d-flex justify-content-between align-items-center"
                v-for="todoActive in todosActive" v-bind:key="todoActive.id"
                >
                    <div class="d-flex align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" :id="'todoCheckbox' + todoActive.id" @click="updateTodo(todoActive.id)">
                            <label class="form-check-label" :for="'todoCheckbox' + todoActive.id"></label>
                        </div>
                        {{todoActive.desc}}
                    </div>
                    <a href="#" @click.prevent="deleteActiveTodo(todoActive.id)">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </a>
                </li>
            </ul>
       </div>

       <div class="done_todo">
           <h6 class="mb-1 mt-3">Done List:</h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                v-for="todoDone in todosDone" v-bind:key="todoDone.id"
                >
                    <div class="d-flex align-items-center" style="text-decoration-line: line-through;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" :id="'todoCheckbox' + todoDone.id" checked>
                            <label class="form-check-label disabled" :for="'todoCheckbox' + todoDone.id"></label>
                        </div>
                       {{todoDone.desc}}
                    </div>
                    <a href="#" @click.prevent="deleteDoneTodo(todoDone.id)">
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
                todoInput:'',
                todosDone:'',
                todosActive:''
            }
        },
        methods:{
            getActiveTodos(){
                this.$http.get('todolist/Work-left-over')
                .then(res => {
                    this.todosActive = res.data;
                    console.log(this.todosActive);
                    console.log('activeget')
                })
            },
            getDoneTodos(){
                this.$http.get('todolist/Work-is-done')
                .then(res => {
                    this.todosDone = res.data;
                    console.log(this.todosDone);
                })
            },
            addTodo(){
                this.$http.post('todolist/store',{
                    'desc':this.todoInput
                })
                .then(res=>{
                    this.todoInput = '';
                    this.getActiveTodos();
                })
                .catch(err=>console.log(err));
            },
            deleteDoneTodo(id){
                if(confirm('Are you sure?')){
                    this.$http.get('todolist/delete/' + id)
                    .then(res => {
                        console.log(res);
                        this.getDoneTodos();
                    })
                }
            },
            deleteActiveTodo(id){
                if(confirm('Are you sure?')){
                    this.$http.get('todolist/delete/' + id)
                    .then(res => {
                        console.log(res);
                        this.getActiveTodos();
                    })
                }
            },
            updateTodo(id){
                this.$http.post('todolist/update/' + id)
                .then(res=>{
                    this.getDoneTodos();
                    this.getActiveTodos();
                })
                .catch(err=>console.log(err));
            }
        },
        computed:{
            activeTodos(){
                return 'test'
            },
            doneTodos(){
                return 'test'
            }
        },
        mounted() {
           this.getActiveTodos();
           this.getDoneTodos();
        }
    }
</script>
