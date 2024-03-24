<script setup>

defineProps({users:Array()});
</script>

<template>
<h1>sanjeev</h1>
<br>
<br>
<li v-for="user in users" :key="user.id" >{{ user.title }}</li>

</template>