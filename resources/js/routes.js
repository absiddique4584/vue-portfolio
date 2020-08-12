

import AdminHome from './components/admin/AdminHome'
//Hero section
import AdminHero from './components/admin/hero/List'
import AddHero from './components/admin/hero/Add'
import EditHero from './components/admin/hero/Edit'
import ViewHero from './components/admin/hero/View'
//Facts Section
import AdminFacts from './components/admin/facts/List'
import Factview from './components/admin/facts/View'
import FactEdit from './components/admin/facts/Edit'
import Addfact from './components/admin/facts/Add'



export const routes = [
    {
        path: '/home',
        component: AdminHome
    },

    //Hero Section
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

    //Facts Section
    {
        path: '/facts',
        component: AdminFacts
    },

    {
        path: '/fact-view/:factID',
        component: Factview
    },
    {
        path: '/fact-edit/:edit_factID',
        component: FactEdit
    },
    {
        path: '/add-fact',
        component: Addfact
    },


]


