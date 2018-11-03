<template>
	<div>
		<h1 class="title">{{post.title}}</h1>
		<p>{{post.body}}</p>
	</div>
</template>

<script>
	import axios from 'axios'

	export default {
		data() {
			return {
				post:{}
			}
		},
		async created() {
			try {
			  const response = await axios.get('/api/article' + this.$route.path)
			  if(!response.data.hasOwnProperty('title')) {
			  	this.$router.replace('/notfound')
			  }
			  this.post = response.data
			} catch (e) {
			  this.errors.push(e)
			}
		}
	}
</script>