<template>
    <h1 class="page-header">{{ title }}</h1>

    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">{{ title }}</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit, sit fuga a rerum dolorem voluptatibus ratione cum cumque unde dolores sunt maxime consectetur eius maiores saepe impedit? Quaerat, quibusdam?
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String
    }
}
</script>

<style>

</style>
