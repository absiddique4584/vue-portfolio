<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Facts Update Page <router-link to="/facts"><button class="btn btn-success">Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="UpdateFact()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <input  type="text" v-model="form.icon" name="icon" class="form-control" id="icon" placeholder="Example: simple-smile"
                                               :class="{ 'is-invalid': form.errors.has('icon') }">
                                        <has-error :form="form" field="icon"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input  type="text" v-model="form.number" name="number" class="form-control" id="number" placeholder="Example: 100"
                                               :class="{ 'is-invalid': form.errors.has('number') }">
                                        <has-error :form="form" field="number"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input  type="text" v-model="form.name" name="name" class="form-control" id="name" placeholder="Example: Happy Clients"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Status(active or inactive)</label>
                                        <input  type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Example: Active"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                                <!-- /.card-body -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
name: "Add",
    data(){
        return{
            form:new Form({
                icon: '',
                number: '',
                name: '',
                status: '',
            })
        }
    },
    methods:{
        UpdateFact(){
            this.form.post('/add-fact')
                .then(( response ) => {
                    this.$router.push('/facts')
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Fact Has Been successfully Added'
                    })
                }).catch(()=>{

            })
        }
    },
    mounted() {
    }
}
</script>

<style scoped>

</style>
