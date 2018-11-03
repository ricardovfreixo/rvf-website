<template>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="media">
				  <img class="mr-3" src="https://via.placeholder.com/64" alt="Generic placeholder image">
				  <div class="media-body">
				    <h5 class="mt-0">{{post.title}}</h5>
				    {{post.sinopse}} <br />
			        <router-link :to="post.slug">(read more)</router-link>
				  </div>
				</div>
			</div>
		</div>
		<hr />
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