import React from 'react'
import './HomePage.css';
import { FaStar } from 'react-icons/fa';
import { FaPlay } from "react-icons/fa";
import backg from '../../../../images/backg.webp'
import camera from '../../../../images/camera.webp'

export default function HomePage() {
  return (
    <div >
      <div className="imagbackg">
        <img src={backg} alt="" />

        <div className="text-image">
          <div className="homL">
            <div className="nas">
              <p className='N'>NOW PLAYING  </p>
              <p className='A'>ACTION </p>
              <p className='S'>SCI-FI</p>
            </div>

            <h1 className='title'>Avengers: Secret Wars</h1>
            <p className='paragra'>The Multiverse collapses.
              Heroes from every timeline must unite to face an enemy who exists
              beyond the boundaries of reality itself.
              The fate of all existence rests on one final stand.</p>

            <div className="rat">
              <p> <FaStar style={{ color: 'yellow' }} /> 9.1/10</p>.
              <p> 2h 58m</p>.
              <p> 2026-08-30</p>.
              <p>English</p>
            </div>

            <div className="bok">
              <button className='btn1'> BOOK NOW</button>
              <button className='btn2'> <FaPlay /> WATCH TRAILER</button>
            </div>
          </div>

          <div className="ime">
            <img src={camera} alt="" />
          </div>
        </div>

      </div>
    </div>
  )
}
