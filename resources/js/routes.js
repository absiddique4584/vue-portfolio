

import AdminHome from './components/admin/AdminHome'
import AdminHero from './components/admin/hero/List'
import AddHero from './components/admin/hero/Add'
import EditHero from './components/admin/hero/Edit'
import ViewHero from './components/admin/hero/View'



export const routes = [
    {
        path: '/home',
        component: AdminHome
    },
    {
        path: '/hero',
        component: AdminHero
    },

    {
        path: '/add-hero',
        component: AddHero
    },
    {
        path: '/edit-hero/:heroID',
        component: EditHero
    },
    {
        path: '/view-hero/:viewID',
        component: ViewHero
    },


]


