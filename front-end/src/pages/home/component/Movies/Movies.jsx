import React from 'react'
import { FaArrowRight } from "react-icons/fa";
import './Movies.css'

export default function Movies() {
    return (
        <div>
            <div className="nowP">
                <div className="noright">
                    <h2>NOW PLAYING</h2>
                    <div className="NoBn">
                        <button>NOW PLAYNG</button>
                        <button>COMING SOON</button>
                    </div>
                </div>
                <div className="viewAll">
                    <p>VIEW ALL <FaArrowRight/></p>
                </div>
            </div>
        </div>
    )
}
