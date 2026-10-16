import React from 'react'
import NavHome from './component/NavHome/NavHome'
import HomePage from './component/HomePage/HomePage'
import TotCin from './component/TotCin/TotCin'
import Movies from './component/Movies/Movies'
import OuCin from './component/OuCin/OuCin'
import Footer from './component/Footer/Footer'

export default function Home() {
  return (
    <div>
      <NavHome/>
      <HomePage />
      <TotCin/>
      <Movies/>
      <OuCin/>
      <Footer/>
    </div>
  )
}
