import VueRouter from 'vue-router';

let routes = [
	{ 	path: '/jobs', component: require('./views/jobs/index'		) },
	// {	path: '/jobs/create', component: require('./views/jobs/form.vue')},
	{	path: '/jobs/:id/edit', component: require('./views/jobs/form'), meta: {mode: 'edit'}},

	{ 	path: '/items', 	component: require('./views/items'		) },
	{ 	path: '/products', 	component: require('./views/products'	) }
];

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
});

