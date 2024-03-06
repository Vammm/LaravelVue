<template>
    <div class="offcanvas-header text-start">
        <form class="form-horizontal">
            <h3>Регистрация</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Имя</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Васия!!">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Фамилия</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Почта</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Зарегистрироваться</button>
            </div>
        </form>
    </div>  
</template>


<script>
    export default {
        data() {
            return {
                login:'',
                secondName:'',
                email:'',
                password:''
            };
        },
        computed: {

        },
        methods: {

        },
        mounted() {
            console.log('mount sign_up');
        }
    }
</script>
