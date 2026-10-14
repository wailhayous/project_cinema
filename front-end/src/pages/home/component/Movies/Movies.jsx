import React from 'react'
import { FaArrowRight } from "react-icons/fa";
import Movie from '../../../../images/movie.webp';
import { FaStar } from 'react-icons/fa';
import './Movies.css'

export default function Movies() {
    return (
        <div>
            <div className="nowP">
                <div className="noright">
                    <h2>NOW PLAYING</h2>
                    <div className="NoBn">
                        <button className='Nbtn1'>NOW PLAYNG</button>
                        <button className='Nbtn2'>COMING SOON</button>
                    </div>
                </div>
                <div className="viewAll">
                    <p>VIEW ALL </p> <FaArrowRight />
                </div>
            </div>

            <div className="cards">
                <div className="card">
                    <div className="imMov">
                        <img src={Movie} alt="" />
                        <div className="nj">
                            <p className='mo1'>PLAYNG</p>
                            <p className='mo2'> <FaStar style={{ color: 'yellow' }} /> 8.7 . <span className='sm'> 2h42m</span></p>
                        </div>
                    </div>
                    <div className="ko">
                        <h3>Dune:Part Three</h3>
                        <div className="tu">
                            <p>SCI-FI</p>
                            <p>ADVENTURE</p>
                        </div>
                        <button className='btM'>VIEW SHOWTIMES</button>
                    </div>
                </div>
                <div className="card">
                    <div className="imMov">
                        <img src={Movie} alt="" />
                        <div className="nj">
                            <p className='mo1'>PLAYNG</p>
                            <p className='mo2'> <FaStar style={{ color: 'yellow' }} /> 8.7 . <span className='sm'> 2h42m</span></p>
                        </div>
                    </div>
                    <div className="ko">
                        <h3>Dune:Part Three</h3>
                        <div className="tu">
                            <p>SCI-FI</p>
                            <p>ADVENTURE</p>
                        </div>
                        <button className='btM'>VIEW SHOWTIMES</button>
                    </div>
                </div>
                <div className="card">
                    <div className="imMov">
                        <img src={Movie} alt="" />
                        <div className="nj">
                            <p className='mo1'>PLAYNG</p>
                            <p className='mo2'> <FaStar style={{ color: 'yellow' }} /> 8.7 . <span className='sm'> 2h42m</span></p>
                        </div>
                    </div>
                    <div className="ko">
                        <h3>Dune:Part Three</h3>
                        <div className="tu">
                            <p>SCI-FI</p>
                            <p>ADVENTURE</p>
                        </div>
                        <button className='btM'>VIEW SHOWTIMES</button>
                    </div>
                </div>
                <div className="card">
                    <div className="imMov">
                        <img src={Movie} alt="" />
                        <div className="nj">
                            <p className='mo1'>PLAYNG</p>
                            <p className='mo2'> <FaStar style={{ color: 'yellow' }} /> 8.7 . <span className='sm'> 2h42m</span></p>
                        </div>
                    </div>
                    <div className="ko">
                        <h3>Dune:Part Three</h3>
                        <div className="tu">
                            <p>SCI-FI</p>
                            <p>ADVENTURE</p>
                        </div>
                        <button className='btM'>VIEW SHOWTIMES</button>
                    </div>
                </div>
                <div className="card">
                    <div className="imMov">
                        <img src={Movie} alt="" />
                        <div className="nj">
                            <p className='mo1'>PLAYNG</p>
                            <p className='mo2'> <FaStar style={{ color: 'yellow' }} /> 8.7 . <span className='sm'> 2h42m</span></p>
                        </div>
                    </div>
                    <div className="ko">
                        <h3>Dune:Part Three</h3>
                        <div className="tu">
                            <p>SCI-FI</p>
                            <p>ADVENTURE</p>
                        </div>
                        <button className='btM'>VIEW SHOWTIMES</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
