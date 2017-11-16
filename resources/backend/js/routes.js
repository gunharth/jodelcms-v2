import VueRouter from 'vue-router';
//let mode = 'history';
// let base = '/en/admin/backend/collections/';
let routes = [

	{ 	path: '/menus', component: require('./views/menus') },
	{	path: '/menus/:id/:lang', component: require('./views/menus/index')},
	{	path: '/menus/:id/:lang/:itemid/edit', component: require('./views/menus/form'), meta: {mode: 'edit'}},

	{ 	path: '/collections', component: require('./views/collections') },
	{ 	path: '/collections/timeline', component: require('./views/timeline/index') },
	{	path: '/collections/timeline/create', component: require('./views/timeline/form.vue')},
	{	path: '/collections/timeline/:id/edit', name: 'timelineEdit', component: require('./views/timeline/form'), meta: {mode: 'edit'}},

	{ 	path: '/collections/jobs', component: require('./views/jobs/index'		) },
	// {	path: '/jobs/create', component: require('./views/jobs/form.vue')},
	{	path: '/collections/jobs/:id/edit', component: require('./views/jobs/form'), meta: {mode: 'edit'}},

	// { 	path: '/items', 	component: require('./views/items'		) },
	// { 	path: '/products', 	component: require('./views/products'	) }
];

export default new VueRouter({
	// base,
	//mode,
	routes,
	// mode: 'history'
	//linkActiveClass: 'active'
});

