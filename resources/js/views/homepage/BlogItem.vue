<template>
	<div class="text-right">
		<h2 class="title">{{post.title}}</h2>
		<em>{{post.sinopse}}</em> <br />
        <router-link :to="post.slug">read more -></router-link> |
	</div>
</template>
<script>
	export default {
		props: ['post'],
		data() {
			return {}
		}
	}
</script>