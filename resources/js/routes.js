import AllBooks from './components/AllBooks.vue';
import AddBook from './components/AddBook.vue';
import EditBook from './components/EditBooks.vue';

export const routes = [
	{
		path: '/',
		name: 'home',
		component: AllBooks
	},
	{
		path: '/add',
		name: 'add',
		component: AddBook
	},
	{
		path: '/edit',
		name: 'edit',
		component: EditBook
	}
];