<template>
	<div>
		<div v-for="post in posts">
			<blog-item :post="post"></blog-item>
		</div>
	</div>
</template>
<script>
	import axios from 'axios'
	import BlogItem from './homepage/BlogItem'

	export default {
		data() {
			return {
			  posts: [],
			  errors: []
			}
		},
		components: {
			BlogItem
		},

	  // Fetches posts when the component is created.
	  async created() {
	    try {
	      const response = await axios.get(`/api/latest`)
	      this.posts = response.data
	    } catch (e) {
	      this.errors.push(e)
	    }
	  }
	}
</script>