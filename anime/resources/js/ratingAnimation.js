/**
 * Adjusts a number to the specified digit.
 *
 * @param {"round" | "floor" | "ceil"} type The type of adjustment.
 * @param {number} value The number.
 * @param {number} exp The exponent (the 10 logarithm of the adjustment base).
 * @returns {number} The adjusted value.
 */
 function decimalAdjust(type, value, exp) {
    type = String(type);
    if (!["round", "floor", "ceil"].includes(type)) {
      throw new TypeError("The type of decimal adjustment must be one of 'round', 'floor', or 'ceil'.");
    }
    exp = Number(exp);
    value = Number(value);
    if (exp % 1 !== 0 || Number.isNaN(value)) {
      return NaN;
    } else if (exp === 0) {
      return Math[type](value);
    }
    const [magnitude, exponent = 0] = value.toString().split('e');
    const adjustedValue = Math[type](`${magnitude}e${exponent - exp}`);
    // Shift back
    const [newMagnitude, newExponent = 0] = adjustedValue.toString().split('e');
    return Number(`${newMagnitude}e${+newExponent + exp}`);
  }
  
  // Decimal round
  const round10 = (value, exp) => decimalAdjust('round', value, exp);
  // Decimal floor
  const floor10 = (value, exp) => decimalAdjust('floor', value, exp);
  // Decimal ceil
  const ceil10 = (value, exp) => decimalAdjust('ceil', value, exp);
  
// COUNTER

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        var result = round10((progress * (end - start) + start),-1);
        if (Number.isInteger(result)){
            obj.innerHTML = result+".0";
        }else{
            obj.innerHTML = result;
        }
        if (progress < 1) {
        window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
    }

    const obj = document.getElementById("circularText");

//CIRCULAR ANIMATION

const Name = data["Name"];
const Poster = data["Poster"];
const Episodes = data["Episodes"];
const Season = data["Season"];
const Year = data["Year"];
const ReleaseDate = data["ReleaseDate"];
const Theme = data["Theme"];
const Genres = data["Genres"];
const Duration = data["Duration"];
const Studios = data["Studios"];
const Soursce = data["Source"];
const OverallPlot = data["OverallPlot"];
const Execution = data["Execution"];
const Uniqueness = data["Uniqueness"];
const WOWFactor = data["WOWFactor"];
const Conflict = data["Conflict"];
const Characters = data["Characters"];
const Vibe = data["Vibe"];
const ArtAnimation = data["ArtAnimation"];
const Music = data["Music"];
const PersonalPref = data["PersonalPref"];
const Review = data["Review"];

const OverallRating = (OverallPlot*10+Execution*20+Uniqueness*10+WOWFactor*10+Conflict*10+Characters*10+Vibe*5+ArtAnimation*10+Music*5+PersonalPref*10)/100;

animateValue(obj, 0, OverallRating, 1500);

document.getElementById("circularRing").style = "--setCircular: "+
(100-OverallRating*10)*2.512+"px";
