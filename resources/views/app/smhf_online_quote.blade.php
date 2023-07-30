@extends('layouts.index')

@section('css')

<style>
    #section-151-91 > .ct-section-inner-wrap {
    max-width: 100%;
    padding-top: 0;
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0
    }
    
    #section-151-91 {
    background-color: rgba(0,0,0,0);
    margin-top: -20px
    }
    
    #section-2-224 > .ct-section-inner-wrap {
    padding-top: 120px;
    padding-right: 40px;
    padding-bottom: 89px;
    padding-left: 40px;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-2-224 {
    background-image: linear-gradient(rgba(72,135,191,0.4),rgba(72,135,191,0.4)),url('{{asset('assets/images/home.jpg')}}');
    text-align: center;
    border-top-width: 1px;
    border-top-color: rgba(0,0,0,0.1);
    color: #ffffff
    }
    
    #section-353-106 > .ct-section-inner-wrap {
    padding-top: 75px;
    padding-bottom: 30px;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-353-106 {
    text-align: center
    }
    
    #section-236-106 > .ct-section-inner-wrap {
    padding-top: 72px;
    padding-bottom: 60px;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-236-106 {
    text-align: center;
    background-color: #ff6851;
    color: #ffffff;
    background-position: 0% 50%
    }
    
    #section-609-106 > .ct-section-inner-wrap {
    padding-top: 50px;
    padding-bottom: 25px;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-609-106 {
    background: unset !important;
    text-align: center
    }
    
    #section-1596-106 > .ct-section-inner-wrap {
    padding-top: 0;
    padding-bottom: 0;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-1596-106 {
    text-align: left
    }
    
    #section-1524-106 > .ct-section-inner-wrap {
    padding-top: 30px;
    padding-bottom: 0;
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    #section-156-91 > .ct-section-inner-wrap {
    max-width: 100%;
    padding-top: 120px;
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0
    }
    
    #section-156-91 {
    background-color: rgba(0,0,0,0)
    }
    
    #section-20-225 > .ct-section-inner-wrap {
    padding-top: 40px;
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0
    }
    
    #section-20-225 {
    background-color: #2a5377;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    @media (max-width: 991px) {
    #section-609-106 > .ct-section-inner-wrap {
        padding-top:60px;
        padding-bottom: 20px
    }
    }
    
    @media (max-width: 767px) {
    #section-151-91 {
        margin-top:-20px;
        z-index: 1
    }
    }
    
    @media (max-width: 767px) {
    #section-2-224 > .ct-section-inner-wrap {
        padding-top:70px;
        padding-bottom: 70px
    }
    }
    
    @media (max-width: 767px) {
    #section-353-106 > .ct-section-inner-wrap {
        padding-bottom:20px
    }
    }
    
    @media (max-width: 767px) {
    #section-1524-106 > .ct-section-inner-wrap {
        align-items:center
    }
    
    #section-1524-106 {
        text-align: center
    }
    }
    
    @media (max-width: 767px) {
    #section-20-225 > .ct-section-inner-wrap {
        padding-top:20px
    }
    }
    
    #div_block-112-91 {
    align-items: flex-start;
    text-align: left;
    flex-direction: column;
    display: flex;
    height: 100%;
    max-width: 250px;
    width: 20vw
    }
    
    #div_block-16-225 {
    flex-direction: row;
    display: flex;
    align-items: center;
    border-top-width: 1px;
    border-top-style: none;
    border-top-color: #dddddd;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none
    }
    
    #div_block-1650-6078 {
    width: 50%;
    flex-direction: column;
    display: flex;
    justify-content: flex-start;
    align-items: center
    }
    
    #div_block-1661-6078 {
    width: 100%;
    margin-bottom: 30px
    }
    
    #div_block-1662-6078 {
    display: flex;
    text-align: left;
    margin-bottom: 0px;
    padding-bottom: 0px
    }
    
    #div_block-1664-6078 {
    height: 100%;
    min-height: 100%;
    max-height: 100%;
    width: 3px;
    min-width: 3px;
    max-width: 3px;
    background-color: #566d8f;
    margin-top: -48px
    }
    
    #div_block-1665-6078 {
    margin-bottom: 0px;
    padding-bottom: 0px;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: flex-start;
    justify-content: flex-start
    }
    
    #div_block-1685-6078 {
    width: 100%;
    margin-bottom: 30px
    }
    
    #div_block-1686-6078 {
    display: flex;
    text-align: left;
    margin-bottom: 0px;
    padding-bottom: 0px
    }
    
    #div_block-1688-6078 {
    height: 100%;
    min-height: 100%;
    max-height: 100%;
    width: 3px;
    min-width: 3px;
    max-width: 3px;
    background-color: #566d8f;
    margin-top: -48px
    }
    
    #div_block-1689-6078 {
    margin-bottom: 0px;
    padding-bottom: 0px;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: flex-start;
    justify-content: flex-start
    }
    
    #div_block-1691-6078 {
    width: 100%;
    margin-bottom: 30px
    }
    
    #div_block-1692-6078 {
    display: flex;
    text-align: left;
    margin-bottom: 0px;
    padding-bottom: 0px
    }
    
    #div_block-1694-6078 {
    height: 100%;
    min-height: 100%;
    max-height: 100%;
    width: 3px;
    min-width: 3px;
    max-width: 3px;
    background-color: #566d8f;
    margin-top: -48px
    }
    
    #div_block-1695-6078 {
    margin-bottom: 0px;
    padding-bottom: 0px;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: flex-start;
    justify-content: flex-start
    }
    
    #div_block-1651-6078 {
    width: 50%;
    text-align: center;
    align-items: center;
    flex-direction: column;
    display: flex;
    justify-content: center
    }
    
    #div_block-220-106 {
    width: 33.33%
    }
    
    #div_block-221-106 {
    margin-bottom: 0px;
    padding-bottom: 30px;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 5px
    }
    
    #div_block-1272-106 {
    background-color: #4887bf;
    width: 100%;
    margin-bottom: 0px;
    padding-bottom: 20px;
    padding-right: 0px;
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    text-align: center;
    align-items: center;
    flex-direction: column;
    display: flex;
    padding-top: 20px;
    border-radius: 0px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
    }
    
    #div_block-1288-106 {
    width: 33.34%
    }
    
    #div_block-1289-106 {
    margin-bottom: 0px;
    padding-bottom: 30px;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 5px
    }
    
    #div_block-1290-106 {
    background-color: #4887bf;
    width: 100%;
    margin-bottom: 0px;
    padding-bottom: 20px;
    padding-right: 0px;
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: center;
    padding-top: 20px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
    }
    
    #div_block-1284-106 {
    width: 33.33%
    }
    
    #div_block-1285-106 {
    padding-bottom: 30px;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 5px;
    margin-bottom: 0px
    }
    
    #div_block-1286-106 {
    background-color: #4887bf;
    width: 100%;
    margin-bottom: 0px;
    padding-bottom: 20px;
    padding-right: 0px;
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: center;
    padding-top: 20px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
    }
    
    #div_block-1642-106 {
    width: 30%;
    justify-content: center;
    text-align: center;
    align-items: center;
    flex-direction: column;
    display: flex
    }
    
    #div_block-1641-106 {
    width: 70.00%;
    flex-direction: column;
    display: flex;
    justify-content: center;
    padding-bottom: 0px;
    margin-bottom: 0px;
    align-items: center
    }
    
    #div_block-1717-6078 {
    width: 50%;
    useCustomTag: true
    }
    
    #div_block-1718-6078 {
    width: 50%;
    useCustomTag: true
    }
    
    #div_block-1594-106 {
    border-top-color: rgba(137,137,137,0.2);
    border-top-width: 2px;
    border-top-style: solid;
    width: 100%;
    margin-bottom: 30px
    }
    
    #div_block-1594-106 {
    border-top-color: rgba(137,137,137,0.2);
    border-top-width: 2px;
    border-top-style: solid;
    width: 100%;
    margin-bottom: 30px
    }
    
    #div_block-1710-6078 {
    width: 100%;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: flex-end
    }
    
    #div_block-120-91 {
    width: 70%;
    flex-direction: column;
    display: flex;
    text-align: left
    }
    
    #div_block-121-91 {
    width: 30.00%;
    flex-direction: column;
    display: flex;
    text-align: left;
    align-items: flex-end
    }
    
    #div_block-108-91 {
    width: 100%;
    flex-direction: row;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: justify;
    gap: 20px;
    margin-bottom: 15px
    }
    
    @media (max-width: 1120px) {
    #div_block-16-225 {
        border-top-style:solid
    }
    }
    
    @media (max-width: 991px) {
    #div_block-16-225 {
        display:flex;
        align-items: center;
        text-align: center
    }
    }
    
    @media (max-width: 767px) {
    #div_block-112-91 {
        width:40vw;
        margin-bottom: 0px;
        flex-direction: column;
        display: flex;
        text-align: left;
        align-items: center;
        height: 80px
    }
    }
    
    @media (max-width: 767px) {
    #div_block-16-225 {
        flex-direction:row;
        display: flex;
        text-align: center
    }
    }
    
    @media (max-width: 479px) {
    #div_block-112-91 {
        width:40vw;
        padding-bottom: 0px;
        max-height: 150px
    }
    }
    
    @media (max-width: 479px) {
    #div_block-16-225 {
        flex-direction:row;
        display: flex;
        align-items: center
    }
    }
    
    @media (max-width: 991px) {
    #new_columns-1649-6078> .ct-div-block {
        width:100% !important
    }
    }
    
    @media (max-width: 991px) {
    #new_columns-219-106> .ct-div-block {
        width:100% !important
    }
    }
    
    #new_columns-219-106 {
    padding-top: 0px
    }
    
    @media (max-width: 991px) {
    #new_columns-1640-106> .ct-div-block {
        width:100% !important
    }
    }
    
    @media (max-width: 991px) {
    #new_columns-1716-6078> .ct-div-block {
        width:100% !important
    }
    }
    
    @media (max-width: 991px) {
    #new_columns-119-91> .ct-div-block {
        width:100% !important
    }
    }
    
    #headline-4-224 {
    margin-bottom: 40px;
    color: #eff4f7;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 50px;
    text-shadow: 1px 1px 10px rgba(43,44,40,0.4)
    }
    
    #headline-354-106 {
    margin-bottom: 30px;
    margin-left: 20px;
    margin-right: 20px;
    color: #4887bf;
    font-weight: 600
    }
    
    #headline-237-106 {
    color: #ffffff;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 30px;
    font-weight: 600
    }
    
    #headline-610-106 {
    color: #4887bf;
    margin-left: 20px;
    margin-right: 20px;
    font-size: 50px
    }
    
    #headline-1529-106 {
    font-weight: 400;
    margin-bottom: 0px;
    color: #4887bf
    }
    
    @media (max-width: 767px) {
    #headline-4-224 {
        margin-left:20px;
        margin-right: 20px;
        font-size: 45px
    }
    }
    
    @media (max-width: 479px) {
    #headline-4-224 {
        font-size:35px
    }
    }
    
    #text_block-1667-6078 {
    color: #ffffff;
    margin-bottom: 0px
    }
    
    #text_block-1690-6078 {
    color: #ffffff;
    margin-bottom: 0px
    }
    
    #text_block-1696-6078 {
    color: #ffffff;
    margin-bottom: 0px
    }
    
    #text_block-1657-6078 {
    font-size: 24px
    }
    
    #text_block-1616-106 {
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 0px
    }
    
    #text_block-1292-106 {
    color: #ffffff;
    font-size: 24px
    }
    
    #text_block-1303-106 {
    font-size: 24px;
    margin-bottom: 30px;
    font-weight: 600
    }
    
    #text_block-1305-106 {
    font-size: 22px;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 30px;
    font-weight: 600
    }
    
    #text_block-1295-106 {
    color: #ffffff;
    font-size: 24px
    }
    
    #text_block-1314-106 {
    font-size: 24px;
    margin-top: 30px;
    margin-bottom: 30px;
    font-weight: 600
    }
    
    #text_block-1309-106 {
    font-size: 22px;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 30px;
    font-weight: 600
    }
    
    #text_block-1296-106 {
    color: #ffffff;
    font-size: 24px
    }
    
    #text_block-1319-106 {
    font-size: 24px;
    margin-top: 30px;
    margin-bottom: 30px;
    font-weight: 600
    }
    
    #text_block-1321-106 {
    font-size: 22px;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 30px;
    font-weight: 600
    }
    
    #text_block-1646-106 {
    color: #ffffff;
    font-size: 28px;
    margin-top: 0px;
    font-weight: 600
    }
    
    #text_block-1725-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1730-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1731-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1733-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1734-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1770-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1771-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1772-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1773-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1774-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1775-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1776-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1777-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1778-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1779-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1780-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1781-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1782-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1783-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1784-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1785-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1817-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1819-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1820-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1821-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1822-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1823-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1880-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1881-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1911-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1729-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1740-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1741-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1742-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1743-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1786-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1787-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1788-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1789-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1790-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1791-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1792-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1793-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1794-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1795-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1796-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1797-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1798-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1799-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1801-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1846-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1848-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1849-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1850-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1851-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1906-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1907-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1908-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1909-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1912-6078 {
    useCustomTag: true;
    margin-bottom: 0px
    }
    
    #text_block-1749-6078 {
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 0px
    }
    
    #text_block-538-106 {
    font-size: 24px;
    margin-top: 30px;
    font-weight: 600
    }
    
    #text_block-1766-6078 {
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 30px;
    text-align: center
    }
    
    #text_block-1853-6078 {
    font-size: 20px;
    font-weight: 400;
    margin-bottom: 30px;
    text-align: center;
    color: #e65e49
    }
    
    #text_block-122-91 {
    color: #ffffff;
    font-size: 14px;
    margin-top: 0px;
    letter-spacing: 0px
    }
    
    #text_block-124-91 {
    color: #ffffff;
    margin-bottom: 0px;
    letter-spacing: 0px;
    font-size: 14px
    }
    
    #text_block-130-91 {
    color: #ffffff;
    font-size: 14px
    }
    
    #text_block-132-91 {
    color: #ffffff;
    font-size: 14px
    }
    
    #text_block-159-91 {
    color: #ffffff;
    margin-bottom: 10px;
    letter-spacing: 0px;
    font-size: 14px
    }
    
    #text_block-79-91 {
    color: rgba(255,255,255,0.75)
    }
    
    #link_text-18-225 {
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none
    }
    
    @media (max-width: 767px) {
    #link_text-18-225 {
        margin-bottom:12px
    }
    }
    
    @media (max-width: 479px) {
    #link_text-18-225 {
        margin-bottom:12px
    }
    }
    
    #link-129-91 {
    flex-direction: column;
    display: flex;
    text-align: center;
    align-items: flex-start
    }
    
    #link-131-91 {
    text-align: left;
    align-items: flex-start;
    flex-direction: column;
    display: flex
    }
    
    #image-13-225 {
    margin-bottom: 0px;
    width: 60%
    }
    
    #image-1317-106 {
    width: 40%
    }
    
    #image-1318-106 {
    width: 40%
    }
    
    #image-1323-106 {
    width: 40%
    }
    
    #image-1358-106 {
    width: 100%
    }
    
    #image-1715-6078 {
    width: 25%
    }
    
    #image-164-91 {
    width: 200px
    }
    
    @media (max-width: 767px) {
    #image-13-225 {
        width:40%
    }
    }
    
    @media (max-width: 479px) {
    #image-13-225 {
        width:60%
    }
    }
    
    #inner_content-19-225 {
    margin-bottom: 0px;
    margin-top: 0px
    }
    
    #_nav_menu-17-225 .oxy-nav-menu-hamburger-line {
    background-color: #4887bf
    }
    
    @media (max-width: 1120px) {
    #_nav_menu-17-225 .oxy-nav-menu-list {
        display:none
    }
    
    #_nav_menu-17-225 .oxy-menu-toggle {
        display: initial
    }
    
    #_nav_menu-17-225.oxy-nav-menu.oxy-nav-menu-open .oxy-nav-menu-list {
        display: initial
    }
    }
    
    #_nav_menu-17-225.oxy-nav-menu.oxy-nav-menu-open {
    margin-top: 0 !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
    margin-bottom: 0 !important
    }
    
    #_nav_menu-17-225.oxy-nav-menu.oxy-nav-menu-open .menu-item a {
    color: #6799b2;
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 10px;
    padding-right: 10px
    }
    
    #_nav_menu-17-225.oxy-nav-menu.oxy-nav-menu-open .menu-item a:hover {
    color: #566d8f
    }
    
    #_nav_menu-17-225 .oxy-nav-menu-hamburger-wrap {
    width: 24px;
    height: 24px
    }
    
    #_nav_menu-17-225 .oxy-nav-menu-hamburger {
    width: 24px;
    height: 19px
    }
    
    #_nav_menu-17-225 .oxy-nav-menu-hamburger-line {
    height: 3px;
    background-color: #6799b2
    }
    
    #_nav_menu-17-225 .oxy-nav-menu-hamburger-wrap:hover .oxy-nav-menu-hamburger-line {
    background-color: #566d8f
    }
    
    #_nav_menu-17-225.oxy-nav-menu-open .oxy-nav-menu-hamburger .oxy-nav-menu-hamburger-line:first-child {
    top: 8px
    }
    
    #_nav_menu-17-225.oxy-nav-menu-open .oxy-nav-menu-hamburger .oxy-nav-menu-hamburger-line:last-child {
    top: -8px
    }
    
    #_nav_menu-17-225 {
    margin-right: 16px
    }
    
    #_nav_menu-17-225 .menu-item a {
    font-size: 1.1rem;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: capitalize;
    padding-top: 0px;
    padding-bottom: 0px;
    padding-left: 10px;
    padding-right: 10px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #4887bf
    }
    
    #_nav_menu-17-225 .current-menu-item a {
    padding-bottom: 0px;
    border-bottom-width: 0px
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .menu-item a {
    justify-content: flex-start
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .sub-menu .menu-item a {
    border: 0;
    padding-top: 0px;
    padding-bottom: 0px;
    padding-top: 16px;
    padding-bottom: 16px
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .oxy-nav-menu-list .sub-menu .menu-item a:hover {
    padding-top: 16px;
    padding-bottom: 16px
    }
    
    #_nav_menu-17-225 .menu-item:hover a {
    color: #4887bf;
    padding-bottom: 0px;
    border-bottom-width: 0px
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .menu-item a:hover {
    justify-content: flex-start
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .sub-menu .menu-item a:hover {
    border: 0;
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: #64acc1;
    color: #ffffff
    }
    
    @media (max-width: 1120px) {
    #_nav_menu-17-225 {
        padding-top:22px;
        padding-left: 22px;
        padding-right: 22px;
        padding-bottom: 22px
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .sub-menu .menu-item a {
        border: 0
    }
    }
    
    @media (max-width: 767px) {
    #_nav_menu-17-225 {
        margin-right:0px
    }
    
    #_nav_menu-17-225.oxy-nav-menu:not(.oxy-nav-menu-open) .sub-menu .menu-item a {
        border: 0
    }
    }
    
    #shortcode-678-106 {
    width: 100%
    }
    
    #shortcode-1600-106 {
    margin-top: 30px
    }
    
    @media (max-width: 991px) {
    #shortcode-678-106 {
        width:90%
    }
    }
    
    @media (max-width: 767px) {
    #shortcode-678-106 {
        width:100%
    }
    }
    
    #_header-2-225 {
    margin-bottom: 0px;
    padding-bottom: 0px;
    z-index: 2 !important
    }
    
    @media (max-width: 767px) {
    #_header_row-10-225 .oxy-header-container {
        flex-direction:column
    }
    
    #_header_row-10-225 .oxy-header-container > div {
        justify-content: center
    }
    }
    
    .oxy-header.oxy-sticky-header-active > #_header_row-10-225.oxygen-show-in-sticky-only {
    display: block
    }
    
    #_header_row-10-225 {
    border-bottom-width: 1px;
    border-bottom-style: none;
    border-bottom-color: #dddddd;
    border-top-style: solid;
    border-right-style: none;
    border-left-style: none;
    border-top-color: #4887bf;
    border-top-width: 5px;
    margin-bottom: 0px;
    padding-bottom: 0px
    }
    
    @media (max-width: 991px) {
    .oxy-header.oxy-sticky-header-active > #_header_row-10-225.oxygen-show-in-sticky-only {
        display:block
    }
    
    #_header_row-10-225 {
        margin-bottom: 10px
    }
    }
    
    #_social_icons-98-91.oxy-social-icons {
    flex-direction: row;
    margin-right: -10px;
    margin-bottom: -10px
    }
    
    #_social_icons-98-91.oxy-social-icons a {
    font-size: 30px;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 0;
    background-color: #ffffff
    }
    
    #_social_icons-98-91.oxy-social-icons a svg {
    width: 0.5em;
    height: 0.5em;
    color: #2a5377
    }
    
    #_social_icons-98-91.oxy-social-icons a:hover svg {
    color: #2a5377
    }
    
    .oxy_shape_divider {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -1px;
    pointer-events: none
    }
    
    .oxy_shape_divider > svg {
    min-width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 0;
    transform-origin: bottom center
    }
    
    .oxy_shape_divider_top {
    top: -1px;
    bottom: initial
    }
    
    .oxy_shape_divider_flipped {
    transform: scaleX(-1)
    }
    
    #-shape-divider-152-91 .oxy_shape_divider {
    color: #ffffff;
    z-index: 1
    }
    
    #-shape-divider-152-91 .oxy_shape_divider svg {
    height: 50px
    }
    
    #-shape-divider-1647-106 .oxy_shape_divider {
    z-index: 0
    }
    
    #-shape-divider-1647-106 .oxy_shape_divider svg {
    height: 70px
    }
    
    #-shape-divider-157-91 .oxy_shape_divider {
    color: #2a5377;
    z-index: 1
    }
    
    #-shape-divider-157-91 .oxy_shape_divider svg {
    height: 70px
    }
    
    @media (max-width: 1120px) {
    #-shape-divider-152-91 .oxy_shape_divider {
        z-index:1
    }
    }
    
    @media (max-width: 767px) {
    #-shape-divider-152-91 .oxy_shape_divider {
        z-index:1
    }
    }
    
    @media (max-width: 479px) {
    #-shape-divider-152-91 {
        margin-top:1px
    }
    }
    
    .ct-section {
    width: 100%;
    background-size: cover;
    background-repeat: repeat
    }
    
    .ct-section>.ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    .ct-div-block {
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: flex-start
    }
    
    .ct-new-columns {
    display: flex;
    width: 100%;
    flex-direction: row;
    align-items: stretch;
    justify-content: center;
    flex-wrap: wrap
    }
    
    .ct-link-text {
    display: inline-block
    }
    
    .ct-link {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    text-decoration: none;
    flex-direction: column;
    align-items: center;
    justify-content: center
    }
    
    .ct-link-button {
    display: inline-block;
    text-align: center;
    text-decoration: none
    }
    
    .ct-link-button {
    background-color: #1e73be;
    border: 1px solid #1e73be;
    color: #ffffff;
    padding: 10px 16px
    }
    
    .ct-image {
    max-width: 100%
    }
    
    .ct-fancy-icon>svg {
    width: 55px;
    height: 55px
    }
    
    .ct-inner-content {
    width: 100%
    }
    
    .ct-slide {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    flex-direction: column;
    align-items: center;
    justify-content: center
    }
    
    .ct-nestable-shortcode {
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: flex-start
    }
    
    .oxy-comments {
    width: 100%;
    text-align: left
    }
    
    .oxy-comment-form {
    width: 100%
    }
    
    .oxy-login-form {
    width: 100%
    }
    
    .oxy-search-form {
    width: 100%
    }
    
    .oxy-tabs-contents {
    display: flex;
    width: 100%;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: flex-start
    }
    
    .oxy-tab {
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: flex-start
    }
    
    .oxy-tab-content {
    display: flex;
    width: 100%;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: flex-start
    }
    
    .oxy-testimonial {
    width: 100%
    }
    
    .oxy-icon-box {
    width: 100%
    }
    
    .oxy-pricing-box {
    width: 100%
    }
    
    .oxy-posts-grid {
    width: 100%
    }
    
    .oxy-gallery {
    width: 100%
    }
    
    .ct-slider {
    width: 100%
    }
    
    .oxy-tabs {
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    align-items: stretch
    }
    
    .ct-modal {
    flex-direction: column;
    align-items: flex-start
    }
    
    .ct-span {
    display: inline-block;
    text-decoration: inherit
    }
    
    .ct-widget {
    width: 100%
    }
    
    .oxy-dynamic-list {
    width: 100%
    }
    
    @media screen and (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .ct-div-block,.oxy-post-content,.ct-text-block,.ct-headline,.oxy-rich-text,.ct-link-text {
        max-width: 100%
    }
    
    img {
        flex-shrink: 0
    }
    
    body * {
        min-height: 1px
    }
    }
    
    .oxy-testimonial {
    flex-direction: row;
    align-items: center
    }
    
    .oxy-testimonial .oxy-testimonial-photo-wrap {
    order: 1
    }
    
    .oxy-testimonial .oxy-testimonial-photo {
    width: 125px;
    height: 125px;
    margin-right: 20px
    }
    
    .oxy-testimonial .oxy-testimonial-photo-wrap,.oxy-testimonial .oxy-testimonial-author-wrap,.oxy-testimonial .oxy-testimonial-content-wrap {
    align-items: flex-start;
    text-align: left
    }
    
    .oxy-testimonial .oxy-testimonial-text {
    margin-bottom: 8px;
    font-size: 21px;
    line-height: 1.4;
    -webkit-font-smoothing: subpixel-antialiased
    }
    
    .oxy-testimonial .oxy-testimonial-author {
    font-size: 18px;
    -webkit-font-smoothing: subpixel-antialiased
    }
    
    .oxy-testimonial .oxy-testimonial-author-info {
    font-size: 12px;
    -webkit-font-smoothing: subpixel-antialiased
    }
    
    .oxy-icon-box {
    text-align: left;
    flex-direction: column
    }
    
    .oxy-icon-box .oxy-icon-box-icon {
    margin-bottom: 12px;
    align-self: flex-start
    }
    
    .oxy-icon-box .oxy-icon-box-heading {
    font-size: 21px;
    margin-bottom: 12px
    }
    
    .oxy-icon-box .oxy-icon-box-text {
    font-size: 16px;
    margin-bottom: 12px;
    align-self: flex-start
    }
    
    .oxy-icon-box .oxy-icon-box-link {
    margin-top: 20px
    }
    
    .oxy-pricing-box .oxy-pricing-box-section {
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    text-align: center
    }
    
    .oxy-pricing-box .oxy-pricing-box-section.oxy-pricing-box-price {
    justify-content: center
    }
    
    .oxy-pricing-box .oxy-pricing-box-section.oxy-pricing-box-graphic {
    justify-content: center
    }
    
    .oxy-pricing-box .oxy-pricing-box-title-title {
    font-size: 48px
    }
    
    .oxy-pricing-box .oxy-pricing-box-title-subtitle {
    font-size: 24px
    }
    
    .oxy-pricing-box .oxy-pricing-box-section.oxy-pricing-box-price {
    flex-direction: row
    }
    
    .oxy-pricing-box .oxy-pricing-box-currency {
    font-size: 28px
    }
    
    .oxy-pricing-box .oxy-pricing-box-amount-main {
    font-size: 80px;
    line-height: 0.7
    }
    
    .oxy-pricing-box .oxy-pricing-box-amount-decimal {
    font-size: 13px
    }
    
    .oxy-pricing-box .oxy-pricing-box-term {
    font-size: 16px
    }
    
    .oxy-pricing-box .oxy-pricing-box-sale-price {
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    margin-bottom: 20px
    }
    
    .oxy-pricing-box .oxy-pricing-box-section.oxy-pricing-box-content {
    font-size: 16px;
    color: rgba(0,0,0,0.5)
    }
    
    .oxy-pricing-box .oxy-pricing-box-section.oxy-pricing-box-cta {
    justify-content: center
    }
    
    .oxy-progress-bar .oxy-progress-bar-background {
    background-color: #000000;
    background-image: linear-gradient(-45deg,rgba(255,255,255,.12) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.12) 50%,rgba(255,255,255,.12) 75%,transparent 75%,transparent);
    animation: none 0s paused
    }
    
    .oxy-progress-bar .oxy-progress-bar-progress-wrap {
    width: 85%
    }
    
    .oxy-progress-bar .oxy-progress-bar-progress {
    background-color: #66aaff;
    padding: 40px;
    animation: none 0s paused,none 0s paused;
    background-image: linear-gradient(-45deg,rgba(255,255,255,.12) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.12) 50%,rgba(255,255,255,.12) 75%,transparent 75%,transparent)
    }
    
    .oxy-progress-bar .oxy-progress-bar-overlay-text {
    font-size: 30px;
    font-weight: 900;
    -webkit-font-smoothing: subpixel-antialiased
    }
    
    .oxy-progress-bar .oxy-progress-bar-overlay-percent {
    font-size: 12px
    }
    
    .ct-slider .unslider-nav ol li {
    border-color: #ffffff
    }
    
    .ct-slider .unslider-nav ol li.unslider-active {
    background-color: #ffffff
    }
    
    .ct-slider .ct-slide {
    padding: 0px
    }
    
    .oxy-superbox .oxy-superbox-secondary,.oxy-superbox .oxy-superbox-primary {
    transition-duration: 0.5s
    }
    
    .oxy-shape-divider {
    width: 0px;
    height: 0px
    }
    
    .oxy_shape_divider svg {
    width: 100%
    }
    
    .oxy-pro-menu .oxy-pro-menu-container:not(.oxy-pro-menu-open-container):not(.oxy-pro-menu-off-canvas-container) .sub-menu {
    box-shadow: px px px px
    }
    
    .oxy-pro-menu .oxy-pro-menu-show-dropdown .oxy-pro-menu-list .menu-item-has-children > a svg {
    transition-duration: 0.4s
    }
    
    .oxy-pro-menu .oxy-pro-menu-show-dropdown .oxy-pro-menu-list .menu-item-has-children > a div {
    margin-left: 0px
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-open-icon svg {
    width: 30px;
    height: 30px
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-open-icon {
    padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-open-icon,.oxy-pro-menu .oxy-pro-menu-mobile-open-icon svg {
    transition-duration: 0.4s
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-close-icon {
    top: 20px;
    left: 20px
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-close-icon svg {
    width: 24px;
    height: 24px
    }
    
    .oxy-pro-menu .oxy-pro-menu-mobile-close-icon,.oxy-pro-menu .oxy-pro-menu-mobile-close-icon svg {
    transition-duration: 0.4s
    }
    
    .oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-off-canvas-container,.oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-open-container {
    background-color: #ffffff
    }
    
    .oxy-pro-menu .oxy-pro-menu-off-canvas-container,.oxy-pro-menu .oxy-pro-menu-open-container {
    background-image: url()
    }
    
    .oxy-pro-menu .oxy-pro-menu-off-canvas-container .oxy-pro-menu-list .menu-item-has-children > a svg,.oxy-pro-menu .oxy-pro-menu-open-container .oxy-pro-menu-list .menu-item-has-children > a svg {
    font-size: 24px
    }
    
    .oxy-pro-menu .oxy-pro-menu-dropdown-links-toggle.oxy-pro-menu-open-container .menu-item-has-children ul,.oxy-pro-menu .oxy-pro-menu-dropdown-links-toggle.oxy-pro-menu-off-canvas-container .menu-item-has-children ul {
    background-color: rgba(0,0,0,0.2);
    border-top-style: solid
    }
    
    .oxy-pro-menu .oxy-pro-menu-container:not(.oxy-pro-menu-open-container):not(.oxy-pro-menu-off-canvas-container) .oxy-pro-menu-list {
    flex-direction: row
    }
    
    .oxy-pro-menu .oxy-pro-menu-container .menu-item a {
    text-align: left;
    justify-content: flex-start
    }
    
    .oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-open-container .menu-item,.oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-off-canvas-container .menu-item {
    align-items: flex-start
    }
    
    .oxy-pro-menu .oxy-pro-menu-off-canvas-container {
    top: 0;
    bottom: 0;
    right: auto;
    left: 0
    }
    
    .oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-open-container .oxy-pro-menu-list .menu-item a,.oxy-pro-menu .oxy-pro-menu-container.oxy-pro-menu-off-canvas-container .oxy-pro-menu-list .menu-item a {
    text-align: left;
    justify-content: flex-start
    }
    
    .ct-section-inner-wrap,.oxy-header-container {
    max-width: 1120px
    }
    
    body {
    font-family: 'Poppins'
    }
    
    body {
    line-height: 1.6;
    font-size: 16px;
    font-weight: 400;
    color: #2b2c28
    }
    
    .oxy-nav-menu-hamburger-line {
    background-color: #2b2c28
    }
    
    h1,h2,h3,h4,h5,h6 {
    font-family: 'Poppins';
    font-size: 64px
    }
    
    h2,h3,h4,h5,h6 {
    font-size: 48px
    }
    
    h3,h4,h5,h6 {
    font-size: 36px
    }
    
    a {
    color: #64acc1;
    text-decoration: none
    }
    
    a:hover {
    color: #6799b2;
    text-decoration: none
    }
    
    .ct-link-text {
    text-decoration:
    }
    
    .ct-link {
    text-decoration:
    }
    
    .ct-link-button {
    border-radius: 3px
    }
    
    .ct-section-inner-wrap {
    padding-top: 75px;
    padding-right: 20px;
    padding-bottom: 75px;
    padding-left: 20px
    }
    
    .ct-new-columns > .ct-div-block {
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px
    }
    
    .oxy-header-container {
    padding-right: 20px;
    padding-left: 20px
    }
    
    @media (max-width: 992px) {
    .ct-columns-inner-wrap {
        display:block !important
    }
    
    .ct-columns-inner-wrap:after {
        display: table;
        clear: both;
        content: ""
    }
    
    .ct-column {
        width: 100% !important;
        margin: 0 !important
    }
    
    .ct-columns-inner-wrap {
        margin: 0 !important
    }
    }
    
    .atomic-secondary-heading {
    color: #2b2c27;
    font-weight: 400;
    font-size: 56px;
    line-height: 1.1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    @media (max-width: 1120px) {
    .atomic-secondary-heading {
        font-size:52px
    }
    }
    
    @media (max-width: 767px) {
    .atomic-secondary-heading {
        font-size:44px
    }
    }
    
    @media (max-width: 479px) {
    .atomic-secondary-heading {
        font-size:40px
    }
    }
    
    .atomic-primary-button:hover {
    color: #ffffff;
    background-color: #e65e49
    }
    
    .atomic-primary-button {
    font-family: 'Poppins';
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 48px;
    padding-right: 48px;
    font-size: 20px;
    color: #ffffff;
    font-weight: 700;
    line-height: 1.2;
    letter-spacing: .25em;
    text-align: center;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all;
    text-transform: none;
    text-decoration: none;
    font-style: normal;
    background-color: #ff6851
    }
    
    @media (max-width: 991px) {
    .atomic-primary-button {
        padding-top:16px;
        padding-left: 36px;
        padding-right: 36px;
        padding-bottom: 16px
    }
    }
    
    @media (max-width: 767px) {
    .atomic-primary-button {
        font-size:18px
    }
    }
    
    @media (max-width: 479px) {
    .atomic-primary-button {
        font-size:16px
    }
    }
    
    .atomic-steps-1-wrapper {
    max-width: 720px
    }
    
    .atomic-steps-1-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-steps-1-wrapper.oxy-easy-posts .oxy-posts,.atomic-steps-1-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: flex-start;
    justify-content: flex-start
    }
    
    .atomic-steps-1-text-wrapper {
    }
    
    .atomic-steps-1-digit {
    color: #ffffff;
    background-color: #4887bf;
    font-size: 20px;
    font-weight: 600;
    padding-top: 8px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 1000%;
    padding-bottom: 10px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    z-index: 100
    }
    
    .atomic-steps-1-digit-wrapper {
    text-align: center;
    margin-left: 20px;
    margin-right: 20px
    }
    
    .atomic-steps-1-digit-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-steps-1-digit-wrapper.oxy-easy-posts .oxy-posts,.atomic-steps-1-digit-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center
    }
    
    .atomic-steps-1-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-top: 12px;
    margin-bottom: 8px;
    margin-right: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-steps-1-text {
    color: #3b3c38;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.6;
    margin-right: 20px;
    margin-bottom: 60px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-subheading {
    font-family: 'Poppins';
    line-height: 1.6;
    font-weight: 600;
    max-width: 480px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 0px;
    margin-left: 0px;
    padding-bottom: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    font-size: 24px
    }
    
    @media (max-width: 767px) {
    .atomic-subheading {
        font-size:20px
    }
    }
    
    @media (max-width: 479px) {
    .atomic-subheading {
        font-size:18px
    }
    }
    
    .atomic-content-4-text {
    color: #3b3c38;
    font-weight: 400;
    text-align: left;
    line-height: 1.6;
    margin-bottom: 18px;
    margin-left: 20px;
    margin-right: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-top: 0px;
    font-size: 20px
    }
    
    .atomic-medium-button-outline:hover {
    color: #6799b2
    }
    
    .atomic-medium-button-outline {
    color: #64acc1;
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    padding-top: 13px;
    padding-bottom: 13px;
    padding-right: 34px;
    padding-left: 34px;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    line-height: 1.2;
    letter-spacing: .2em;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .atomic-iconblock-4-column {
    text-align: left
    }
    
    .atomic-iconblock-4-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-4-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-4-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
    }
    
    @media (max-width: 1120px) {
    .atomic-iconblock-4-column {
        text-align:left
    }
    
    .atomic-iconblock-4-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-4-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-4-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    @media (max-width: 991px) {
    .atomic-iconblock-4-column {
        text-align:left
    }
    
    .atomic-iconblock-4-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-4-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-4-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    @media (max-width: 767px) {
    .atomic-iconblock-4-column {
        text-align:left
    }
    
    .atomic-iconblock-4-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-4-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-4-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    @media (max-width: 479px) {
    .atomic-iconblock-4-column {
        text-align:center
    }
    
    .atomic-iconblock-4-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-4-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-4-column.ct-section .ct-section-inner-wrap {
        align-items: center
    }
    }
    
    .atomic-iconblock-4-icon {
    background-color: #eff4f7;
    border: 1px solid #eff4f7;
    padding: 24px;
    color: #566d8f
    }
    
    .atomic-iconblock-4-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-4-icon {
    margin-bottom: 16px
    }
    
    .atomic-iconblock-4-title {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #4887bf
    }
    
    .atomic-iconblock-4-text {
    font-size: 20px;
    color: #3b3c38;
    font-weight: 400;
    line-height: 1.6;
    margin-bottom: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-4-link:after {
    content: "\00bb";
    margin-left: 6px
    }
    
    .atomic-iconblock-4-link:hover {
    color: #566d8f;
    text-decoration: none
    }
    
    .atomic-iconblock-4-link {
    font-size: 16px;
    color: #6799b2;
    line-height: 1.4;
    text-decoration: none;
    margin-bottom: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .atomic-small-text {
    font-family: 'Poppins';
    color: #898989;
    font-size: 12px;
    font-weight: 300;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-8-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-8-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-8-icon {
    margin-bottom: 12px
    }
    
    .atomic-iconblock-8-title {
    font-size: 20px;
    font-weight: 500;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-8-text {
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    margin-bottom: 15px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 0px;
    color: #2b2c28
    }
    
    .atomic-medium-button:hover {
    color: #ffffff;
    border-top-color: #6799b2;
    border-right-color: #6799b2;
    border-bottom-color: #6799b2;
    border-left-color: #6799b2;
    background-color: #e65e49
    }
    
    .atomic-medium-button {
    background-color : #1e73be;
    border: 1px solid #1e73be;
    color: #ffffff;
    padding: 10px 16px
    }
    
    .atomic-medium-button {
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 700;
    line-height: 1.2;
    padding-left: 15px;
    padding-bottom: 10px;
    text-align: center;
    transition-duration: 0s;
    border-top-color: #64acc1;
    border-right-color: #64acc1;
    border-bottom-color: #64acc1;
    border-left-color: #64acc1;
    background-color: #ff6851;
    border-radius: 8px;
    padding-top: 10px;
    padding-right: 10px;
    letter-spacing: .05em
    }
    
    .atomic-testimonial-11-wrapper {
    width: 100%;
    text-align: center;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    margin-top: 72px;
    height: 100%;
    background-color: #ffffff;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.05)
    }
    
    .atomic-testimonial-11-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-testimonial-11-wrapper.oxy-easy-posts .oxy-posts,.atomic-testimonial-11-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-testimonial-11-avatar {
    width: 75%;
    border-radius: 100%;
    margin-top: -60px;
    margin-bottom: 24px
    }
    
    @media (max-width: 991px) {
    .atomic-testimonial-11-avatar {
        width:40%
    }
    }
    
    @media (max-width: 767px) {
    .atomic-testimonial-11-avatar {
        width:60%
    }
    }
    
    @media (max-width: 479px) {
    .atomic-testimonial-11-avatar {
        width:100%
    }
    }
    
    .atomic-testimonial-11-author {
    font-size: 20px;
    font-weight: 500;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-testimonial-11-small-text {
    color: #898989;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-bottom: 24px;
    margin-top: 0px;
    padding-top: 0px;
    text-transform: uppercase
    }
    
    .atomic-testimonial-11-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.6;
    font-style: italic;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 0px;
    margin-bottom: 36px
    }
    
    .atomic-iconblock-15-wrapper {
    width: 100%;
    background-color: #ffffff;
    margin-top: 36px;
    padding-left: 30px;
    padding-bottom: 42px;
    padding-right: 30px;
    text-align: center;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-iconblock-15-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-15-wrapper.oxy-easy-posts .oxy-posts,.atomic-iconblock-15-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-iconblock-15-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-15-title {
    font-weight: 500;
    font-size: 18px;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-15-icon {
    background-color: #6799b2;
    border: 1px solid #6799b2;
    padding: 24px;
    color: #ffffff
    }
    
    .atomic-iconblock-15-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-15-icon {
    margin-top: -40px;
    margin-bottom: 24px
    }
    
    .atomic-pricing-8-column {
    text-align: center;
    width: 50%;
    box-shadow: rgba(0,0,0,0.1) 1px 1px 0px 0px,inset rgba(0,0,0,0.1) 1px 1px 0px 0px
    }
    
    .atomic-pricing-8-column:not(.ct-section):not(.oxy-easy-posts),.atomic-pricing-8-column.oxy-easy-posts .oxy-posts,.atomic-pricing-8-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-pricing-8-title {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 30px;
    color: #4887bf;
    padding-top: 20px
    }
    
    .atomic-pricing-8-icon {
    color: #566d8f
    }
    
    .atomic-pricing-8-icon >svg {
    width: 42px;
    height: 42px
    }
    
    .atomic-pricing-8-icon {
    margin-bottom: 16px;
    margin-top: 6px
    }
    
    .atomic-pricing-8-text {
    color: #2b2c27;
    font-size: 18px;
    font-weight: 400;
    padding-top: 0px;
    padding-bottom: 0px;
    width: 100%;
    text-align: center;
    border-top-color: #dddddd;
    border-top-style: solid;
    border-top-width: 1px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 0px
    }
    
    .atomic-pricing-8-text-hidden {
    font-size: 18px;
    color: #dddddd;
    font-weight: 400;
    padding-top: 12px;
    padding-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-8-cost {
    color: #64acc1;
    font-size: 48px;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-top: 36px
    }
    
    .atomic-pricing-8-small-text {
    font-weight: 400;
    font-size: 12px;
    color: #898989;
    line-height: 1.4;
    margin-bottom: 42px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-17-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-17-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-17-icon {
    margin-bottom: 16px
    }
    
    .atomic-iconblock-17-title {
    font-family: 'Poppins';
    font-size: 20px;
    font-weight: 600;
    color: #ff6851;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-17-text {
    font-family: 'Poppins';
    font-size: 18px;
    color: #3b3c38;
    font-weight: 400;
    margin-bottom: 48px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .agencyb-red-button:hover {
    background-color : #ec2758;
    border: 1px solid #ec2758
    }
    
    .agencyb-red-button:hover {
    transform: scale(1.05,1.05)
    }
    
    .agencyb-red-button {
    background-color : #ec2758;
    border: 1px solid #ec2758;
    color: #ffffff;
    padding: 14px 22.4px
    }
    
    .agencyb-red-button {
    font-family: 'Poppins';
    button-hover_color: #ec2758;
    font-size: 18px;
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: 2px;
    color: #ffffff;
    padding-left: 48px;
    padding-right: 48px;
    border-radius: 100px;
    text-align: center;
    transition-duration: 0.2s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .agencyb-heading-two {
    font-family: 'Poppins';
    color: #ffffff;
    font-size: 56px;
    font-weight: 700;
    line-height: 1
    }
    
    @media (max-width: 767px) {
    .agencyb-heading-two {
        font-size:56px
    }
    }
    
    @media (max-width: 479px) {
    .agencyb-heading-two {
        font-size:48px
    }
    }
    
    .agencyb-red-outline-button:hover {
    background-color: transparent;
    border: 1px solid #ec2758;
    color: #ec2758
    }
    
    .agencyb-red-outline-button:hover {
    transform: scale(1.05,1.05)
    }
    
    .agencyb-red-outline-button {
    background-color: transparent;
    border: 1px solid #ec2758;
    color: #ec2758;
    padding: 13px 21.4px
    }
    
    .agencyb-red-outline-button {
    font-family: 'Poppins';
    button-hover_color: #ec2758;
    font-size: 18px;
    font-weight: 900;
    letter-spacing: 2px;
    line-height: 1.2;
    padding-left: 48px;
    padding-right: 48px;
    border-radius: 100px;
    transition-duration: 0.2s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .agencyb-services-1-text {
    font-family: 'Poppins';
    color: #000000;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.6
    }
    
    .agencyb-service-1-title {
    font-family: 'Poppins';
    color: #3c3876;
    font-size: 24px;
    font-weight: 700;
    line-height: 1.2;
    text-align: left;
    margin-bottom: 4px
    }
    
    .agencyb-service-1-icon {
    color: #ec2758
    }
    
    .agencyb-service-1-icon >svg {
    width: 36px;
    height: 36px
    }
    
    .agencyb-service-1-icon {
    }
    
    .agencyb-service-1-icon-wrapper {
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    border-top-color: rgba(0,0,0,0.1);
    border-right-color: rgba(0,0,0,0.1);
    border-bottom-color: rgba(0,0,0,0.1);
    border-left-color: rgba(0,0,0,0.1);
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-radius: 100%;
    margin-right: 16px
    }
    
    @media (max-width: 991px) {
    .agencyb-service-1-icon-wrapper {
        margin-right:0px;
        margin-bottom: 6px
    }
    }
    
    .agencyb-service-1-column {
    }
    
    .agencyb-service-1-column:not(.ct-section):not(.oxy-easy-posts),.agencyb-service-1-column.oxy-easy-posts .oxy-posts,.agencyb-service-1-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row
    }
    
    @media (max-width: 991px) {
    .agencyb-service-1-column {
        text-align:center
    }
    
    .agencyb-service-1-column:not(.ct-section):not(.oxy-easy-posts),.agencyb-service-1-column.oxy-easy-posts .oxy-posts,.agencyb-service-1-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .agencyb-service-1-text-wrapper {
    text-align: left
    }
    
    .agencyb-service-1-text-wrapper:not(.ct-section):not(.oxy-easy-posts),.agencyb-service-1-text-wrapper.oxy-easy-posts .oxy-posts,.agencyb-service-1-text-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    @media (max-width: 991px) {
    .agencyb-service-1-text-wrapper {
        text-align:center
    }
    
    .agencyb-service-1-text-wrapper:not(.ct-section):not(.oxy-easy-posts),.agencyb-service-1-text-wrapper.oxy-easy-posts .oxy-posts,.agencyb-service-1-text-wrapper.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .atomic-testimonial-7-wrapper {
    background-color: #ffffff;
    width: 100%;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    padding-top: 40px;
    height: 100%;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-testimonial-7-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-testimonial-7-wrapper.oxy-easy-posts .oxy-posts,.atomic-testimonial-7-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center
    }
    
    .atomic-testimonial-7-text {
    font-size: 18px;
    color: #3b3c38;
    font-weight: 300;
    line-height: 1.6;
    text-align: left;
    font-style: italic;
    margin-bottom: 32px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-testimonial-7-avatar {
    width: 60px;
    border-radius: 100%;
    margin-right: 12px
    }
    
    .atomic-testimonial-7-author {
    font-size: 20px;
    font-weight: 600;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: .12em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-primary-heading {
    color: #2b2c27;
    font-size: 64px;
    font-weight: 400;
    line-height: 1.1;
    margin-top: 0px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    @media (max-width: 767px) {
    .atomic-primary-heading {
        font-size:56px
    }
    }
    
    @media (max-width: 479px) {
    .atomic-primary-heading {
        font-size:44px
    }
    }
    
    .atomic-outline-button:hover {
    background-color: transparent;
    border-top-color: #e65e49;
    border-right-color: #e65e49;
    border-bottom-color: #e65e49;
    border-left-color: #e65e49;
    color: #e65e49
    }
    
    .atomic-outline-button {
    background-color: transparent;
    border: 1px solid #6799b2;
    color: #6799b2;
    padding: 9px 15px
    }
    
    .atomic-outline-button {
    font-family: 'Poppins';
    font-weight: 700;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    text-align: center;
    line-height: 1.2;
    border-top-width: 3px;
    border-right-width: 3px;
    border-bottom-width: 3px;
    border-left-width: 3px;
    border-top-color: #ff6851;
    border-right-color: #ff6851;
    border-bottom-color: #ff6851;
    border-left-color: #ff6851;
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 18px;
    padding-bottom: 18px;
    background-color: transparent;
    font-size: 20px;
    margin-right: 2px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: .25em;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all;
    text-transform: none;
    font-style: normal;
    text-decoration: none;
    color: #ff6851
    }
    
    @media (max-width: 991px) {
    .atomic-outline-button {
        padding-top:14px;
        padding-bottom: 14px;
        padding-right: 34px;
        padding-left: 34px
    }
    }
    
    @media (max-width: 767px) {
    .atomic-outline-button {
        font-size:18px
    }
    }
    
    @media (max-width: 479px) {
    .atomic-outline-button {
        font-size:16px
    }
    }
    
    .atomic-small-button-outline:hover {
    color: #6799b2
    }
    
    .atomic-small-button-outline {
    font-weight: 700;
    color: #64acc1;
    font-size: 14px;
    line-height: 1.2;
    letter-spacing: .25em;
    text-align: center;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    padding-top: 8px;
    padding-bottom: 9px;
    padding-left: 24px;
    padding-right: 24px;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .atomic-content-23-wrapper {
    width: 100%;
    background-color: #ffffff;
    padding-top: 36px;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 36px;
    text-align: center;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-content-23-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-content-23-wrapper.oxy-easy-posts .oxy-posts,.atomic-content-23-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-content-23-title {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: .12em;
    margin-bottom: 4px;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    color: #4887bf
    }
    
    .atomic-content-23-text {
    color: #3b3c38;
    font-size: 20px;
    font-weight: 200;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-bottom: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px
    }
    
    .atomic-content-39-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    text-align: left;
    line-height: 1.6;
    margin-bottom: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-5-column {
    text-align: left;
    font-weight: 300;
    border-radius: 5px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #999999;
    border-right-color: #999999;
    border-bottom-color: #999999;
    border-left-color: #999999;
    box-shadow: 10px 10px 10px 10px rgba(255,255,255,0.1)
    }
    
    .atomic-iconblock-5-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-5-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-5-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    @media (max-width: 1120px) {
    .atomic-iconblock-5-column {
        text-align:center
    }
    
    .atomic-iconblock-5-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-5-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-5-column.ct-section .ct-section-inner-wrap {
        align-items: center
    }
    }
    
    @media (max-width: 479px) {
    .atomic-iconblock-5-column {
        text-align:center
    }
    
    .atomic-iconblock-5-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-5-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-5-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .atomic-iconblock-5-icon {
    background-color: #eff4f7;
    border: 1px solid #eff4f7;
    padding: 24px;
    color: #566d8f
    }
    
    .atomic-iconblock-5-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-5-icon {
    margin-bottom: 16px
    }
    
    .atomic-iconblock-5-title {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.1;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #4887bf
    }
    
    .atomic-iconbox-5-text {
    font-size: 18px;
    font-weight: 400;
    color: #3b3c38;
    line-height: 1.6;
    margin-bottom: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-26-image {
    }
    
    @media (max-width: 991px) {
    .atomic-content-26-image {
        width:30%
    }
    }
    
    @media (max-width: 479px) {
    .atomic-content-26-image {
        width:50%
    }
    }
    
    .atomic-content-26-title {
    font-size: 24px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-bottom: 4px;
    width: 75%;
    color: #4887bf
    }
    
    @media (max-width: 991px) {
    .atomic-content-26-title {
        width:50%
    }
    }
    
    .atomic-content-26-text {
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: 0px
    }
    
    @media (max-width: 1120px) {
    .atomic-content-26-text {
    }
    }
    
    .atomic-content-26-columns {
    margin-bottom: 75px
    }
    
    .atomic-testimonial-10-author {
    font-weight: 500;
    font-size: 20px;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-testimonial-10-small-text {
    color: #898989;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.4;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-12-column {
    text-align: left;
    width: 33.33%
    }
    
    .atomic-iconblock-12-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-12-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-12-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    @media (max-width: 1120px) {
    .atomic-iconblock-12-column {
    }
    }
    
    @media (max-width: 991px) {
    .atomic-iconblock-12-column {
        text-align:center
    }
    
    .atomic-iconblock-12-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-12-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-12-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .atomic-iconblock-12-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-12-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-12-icon {
    margin-bottom: 12px
    }
    
    .atomic-iconblock-12-title {
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1.1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2b2c28;
    letter-spacing: .01em;
    margin-bottom: 30px
    }
    
    .atomic-iconblock-12-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 50px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-1-text {
    color: #3b3c38;
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 1.6;
    font-weight: 300;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-1-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-1-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-1-icon {
    margin-bottom: 15px
    }
    
    .atomic-iconblock-1-title {
    font-weight: 400;
    line-height: 1.1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: .1em;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    color: #4887bf;
    font-size: 2.5rem;
    margin-bottom: 30px
    }
    
    .atomic-iconblock-1-column {
    text-align: left
    }
    
    .atomic-iconblock-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-1-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-1-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    @media (max-width: 991px) {
    .atomic-iconblock-1-column {
        text-align:center
    }
    
    .atomic-iconblock-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-1-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-1-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .atomic-other-single-content {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .oxy-stock-content-styles {
    }
    
    .atomic-simple-article-content {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-header-7-text:hover {
    color: #e28b00
    }
    
    .atomic-header-7-text {
    font-size: 14px;
    font-weight: 600;
    line-height: 1.4;
    text-align: right;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #ff6851
    }
    
    @media (max-width: 991px) {
    .atomic-header-7-text {
        margin-top:12px
    }
    }
    
    .atomic-logo:hover {
    opacity: 1
    }
    
    .atomic-logo {
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all;
    height: 100%;
    opacity: 1;
    width: 100%;
    max-width: 100%
    }
    
    @media (max-width: 1120px) {
    .atomic-logo {
    }
    }
    
    .atomic-tritary-heading {
    color: #2b2c27;
    font-size: 36px;
    font-weight: 400;
    line-height: 1.2;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    @media (max-width: 767px) {
    .atomic-tritary-heading {
        font-size:30px
    }
    }
    
    .atomic-footer-7-title {
    color: #ffffff;
    font-size: 20px;
    font-weight: 500;
    text-align: left;
    line-height: 1.1;
    letter-spacing: 0.15em;
    margin-bottom: 12px;
    margin-top: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-footer-7-link:hover {
    color: #ffffff
    }
    
    .atomic-footer-7-link {
    color: rgba(255,255,255,0.75);
    font-size: 16px;
    font-weight: 700;
    line-height: 1.1;
    margin-top: 12px;
    margin-bottom: 5px;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-footer-7-text:hover {
    color: #ff6851
    }
    
    .atomic-footer-7-text {
    font-size: 15px;
    font-weight: 400;
    color: #eff4fb;
    margin-bottom: 18px;
    margin-top: 18px;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-footer-7-small-link:hover {
    color: #ffffff
    }
    
    .atomic-footer-7-small-link {
    color: rgba(255,255,255,0.4);
    font-size: 12px;
    font-weight: 400;
    line-height: 1.6;
    text-align: right;
    margin-left: 24px;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-29-wrapper {
    width: 100%;
    padding-top: 40px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    text-align: justify;
    background-color: rgba(55,148,143,0.2);
    box-shadow: 0px 12px 24px rgba(86,109,143,0.1)
    }
    
    .atomic-content-29-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-content-29-wrapper.oxy-easy-posts .oxy-posts,.atomic-content-29-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-content-29-icon {
    color: #566d8f
    }
    
    .atomic-content-29-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-content-29-icon {
    margin-bottom: 12px
    }
    
    .atomic-content-29-title {
    font-size: 24px;
    font-weight: 600;
    line-height: 1.1;
    letter-spacing: .12em;
    text-align: left;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-color: #4887bf;
    border-right-color: #4887bf;
    border-bottom-color: #4887bf;
    border-left-color: #4887bf;
    color: #000000
    }
    
    .atomic-content-29-text {
    font-family: 'Poppins';
    font-size: 20px;
    font-weight: 400;
    line-height: 1.6;
    margin-bottom: 32px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    border-top-color: #4887bf;
    border-right-color: #4887bf;
    border-bottom-color: #4887bf;
    border-left-color: #4887bf;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    margin-top: 0px;
    color: #2b2c27
    }
    
    .atomic-hero-1-iconbox-icon {
    color: #566d8f
    }
    
    .atomic-hero-1-iconbox-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-hero-1-iconbox-icon {
    margin-bottom: 12px
    }
    
    .atomic-hero-1-iconbox-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: .1em;
    line-height: 1.2;
    margin-bottom: 6px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-hero-1-iconbox-text {
    font-size: 16px;
    font-weight: 400;
    line-height: 1.4;
    color: #3b3c38;
    margin-bottom: 48px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-27-wrapper {
    box-shadow: 0px 12px 24px rgba(86,109,143,0.1)
    }
    
    .atomic-content-27-checklist-wrapper {
    width: 100%;
    margin-bottom: 18px
    }
    
    .atomic-content-27-checklist-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-content-27-checklist-wrapper.oxy-easy-posts .oxy-posts,.atomic-content-27-checklist-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center
    }
    
    .atomic-content-27-icon {
    color: #4887bf
    }
    
    .atomic-content-27-icon >svg {
    width: 24px;
    height: 24px
    }
    
    .atomic-content-27-icon {
    color: #64acc1;
    margin-right: 8px
    }
    
    .atomic-content-27-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    text-align: left;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-6-column:last-child {
    border-right-style: solid
    }
    
    .atomic-pricing-6-column {
    text-align: center;
    border-top-style: solid;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-color: #dddddd;
    border-right-color: #dddddd;
    border-bottom-color: #dddddd;
    border-left-color: #dddddd
    }
    
    .atomic-pricing-6-column:not(.ct-section):not(.oxy-easy-posts),.atomic-pricing-6-column.oxy-easy-posts .oxy-posts,.atomic-pricing-6-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    @media (max-width: 991px) {
    .atomic-pricing-6-column {
        border-bottom-style:none
    }
    }
    
    .atomic-pricing-6-icon {
    color: #566d8f
    }
    
    .atomic-pricing-6-icon >svg {
    width: 42px;
    height: 42px
    }
    
    .atomic-pricing-6-icon {
    margin-bottom: 16px
    }
    
    .atomic-pricing-6-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-6-cost {
    margin-top: 0px;
    color: #64acc1;
    font-size: 48px;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: 0.5px
    }
    
    .atomic-pricing-6-small-text {
    color: #898989;
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-6-text {
    color: #898989;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.4;
    padding-top: 12px;
    padding-bottom: 12px;
    width: 100%;
    border-top-style: solid;
    border-top-width: 1px;
    border-top-color: #dddddd;
    margin-bottom: 0px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-21-column {
    }
    
    .atomic-iconblock-21-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: 8px;
    letter-spacing: .12em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-21-text {
    margin-bottom: 57px;
    font-size: 18px;
    color: #2b2c27;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-2-column {
    text-align: left
    }
    
    .atomic-iconblock-2-column:not(.ct-section):not(.oxy-easy-posts),.atomic-iconblock-2-column.oxy-easy-posts .oxy-posts,.atomic-iconblock-2-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    .atomic-iconblock-2-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-2-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-2-icon {
    margin-top: 20px;
    margin-bottom: 16px
    }
    
    .atomic-iconblock-2-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-2-text {
    font-size: 18px;
    color: #3b3c38;
    font-weight: 400;
    margin-bottom: 16px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconbox-2-link:after {
    content: "\00bb";
    margin-left: 6px
    }
    
    .atomic-iconbox-2-link:hover {
    color: #566d8f;
    text-decoration: none
    }
    
    .atomic-iconbox-2-link {
    color: #6799b2;
    font-size: 16px;
    text-decoration: none;
    line-height: 1.4;
    margin-bottom: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-showcase-9-title {
    font-size: 20px;
    color: #566d8f;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-showcase-9-text {
    font-size: 18px;
    color: #3b3c38;
    font-weight: 400;
    line-height: 1.6;
    max-width: 480px;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-showcase-9-wrapper {
    width: 100%;
    background-color: #ffffff;
    padding-top: 60px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 60px;
    text-align: left;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-showcase-9-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-showcase-9-wrapper.oxy-easy-posts .oxy-posts,.atomic-showcase-9-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    @media (max-width: 991px) {
    .atomic-showcase-9-wrapper {
        padding-top:40px;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 40px
    }
    }
    
    .atomic-slider-6-image-column {
    text-align: center
    }
    
    .atomic-slider-6-image-column:not(.ct-section):not(.oxy-easy-posts),.atomic-slider-6-image-column.oxy-easy-posts .oxy-posts,.atomic-slider-6-image-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-slider-6-text-column {
    text-align: left
    }
    
    .atomic-slider-6-text-column:not(.ct-section):not(.oxy-easy-posts),.atomic-slider-6-text-column.oxy-easy-posts .oxy-posts,.atomic-slider-6-text-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    @media (max-width: 767px) {
    .atomic-slider-6-text-column {
        text-align:center
    }
    
    .atomic-slider-6-text-column:not(.ct-section):not(.oxy-easy-posts),.atomic-slider-6-text-column.oxy-easy-posts .oxy-posts,.atomic-slider-6-text-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .atomic-slider-6-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    letter-spacing: .12em
    }
    
    .atomic-slider-6-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.4;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-4-icon {
    color: #566d8f
    }
    
    .atomic-pricing-4-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-pricing-4-icon {
    margin-bottom: 16px
    }
    
    .atomic-pricing-4-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-4-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    text-align: left;
    line-height: 1.6;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-4-cost {
    color: #64acc1;
    font-size: 48px;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-top: auto
    }
    
    .atomic-pricing-4-small-text {
    color: #898989;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.4;
    text-align: left;
    margin-bottom: 30px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-cta-7-wrapper {
    text-align: center
    }
    
    .atomic-cta-7-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-cta-7-wrapper.oxy-easy-posts .oxy-posts,.atomic-cta-7-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-cta-7-icon {
    background-color: #eff4f7;
    border: 1px solid #eff4f7;
    padding: 24px;
    color: #6799b2
    }
    
    .atomic-cta-7-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-cta-7-icon {
    margin-bottom: 12px
    }
    
    .atomic-cta-7-text {
    font-size: 18px;
    font-weight: 400;
    color: #3b3c38;
    line-height: 1.6;
    margin-top: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-bottom: auto
    }
    
    .atomic-content-20-image:hover {
    }
    
    .atomic-content-20-image {
    background-color: #ffffff;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-hero-4-video {
    max-width: 640px
    }
    
    .atomic-team-1-column {
    text-align: center;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-width: 6px;
    border-right-width: 6px;
    border-bottom-width: 6px;
    border-left-width: 6px;
    border-top-color: #eff4fb;
    border-right-color: #eff4fb;
    border-bottom-color: #eff4fb;
    border-left-color: #eff4fb
    }
    
    .atomic-team-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-team-1-column.oxy-easy-posts .oxy-posts,.atomic-team-1-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-team-1-mate {
    margin-bottom: 24px
    }
    
    .atomic-team-1-title {
    line-height: 1.2;
    font-size: 20px;
    color: #566d8f;
    font-weight: 600;
    margin-bottom: 4px;
    letter-spacing: .12em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-team-1-text {
    font-size: 14px;
    line-height: 1.6;
    color: #3b3c38;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 300
    }
    
    .atomic-content-32-column {
    width: 33.33%;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-color: #eff4f7;
    border-right-color: #eff4f7;
    border-bottom-color: #eff4f7;
    border-left-color: #eff4f7
    }
    
    .atomic-content-32-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-32-column.oxy-easy-posts .oxy-posts,.atomic-content-32-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between
    }
    
    @media (max-width: 1120px) {
    .atomic-content-32-column {
    }
    
    .atomic-content-32-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-32-column.oxy-easy-posts .oxy-posts,.atomic-content-32-column.ct-section .ct-section-inner-wrap {
        display: flex
    }
    }
    
    @media (max-width: 767px) {
    .atomic-content-32-column {
        width:100%
    }
    
    .atomic-content-32-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-32-column.oxy-easy-posts .oxy-posts,.atomic-content-32-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column
    }
    }
    
    .atomic-content-32-image {
    width: auto
    }
    
    .atomic-content-32-text-wrapper {
    width: 100%;
    background-color: #ffffff;
    padding-top: 47px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 47px;
    text-align: center;
    flex-grow: 1
    }
    
    .atomic-content-32-text-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-content-32-text-wrapper.oxy-easy-posts .oxy-posts,.atomic-content-32-text-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
    }
    
    @media (max-width: 767px) {
    .atomic-content-32-text-wrapper {
        padding-top:24px
    }
    }
    
    .atomic-content-32-icon {
    color: #566d8f
    }
    
    .atomic-content-32-icon >svg {
    width: 42px;
    height: 42px
    }
    
    .atomic-content-32-icon {
    margin-top: 12px;
    margin-bottom: 12px
    }
    
    @media (max-width: 767px) {
    .atomic-content-32-icon {
    }
    
    .atomic-content-32-icon:not(.ct-section):not(.oxy-easy-posts),.atomic-content-32-icon.oxy-easy-posts .oxy-posts,.atomic-content-32-icon.ct-section .ct-section-inner-wrap {
        flex-direction: unset
    }
    }
    
    .atomic-content-32-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
    margin-top: 6px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-32-small-text {
    font-family: 'Poppins';
    color: #898989;
    margin-bottom: 8px;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-32-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    text-align: center;
    margin-bottom: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-18-icon {
    background-color: #6799b2;
    border: 1px solid #6799b2;
    padding: 24px;
    color: #ffffff
    }
    
    .atomic-iconblock-18-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-18-icon {
    margin-bottom: 12px
    }
    
    .atomic-iconblock-18-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-top: 8px;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-18-text {
    font-size: 18px;
    font-weight: 400;
    color: #3b3c38;
    line-height: 1.6;
    margin-bottom: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-25-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: 4px;
    letter-spacing: .12em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-25-small-text {
    color: #898989;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.4;
    margin-bottom: 6px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-25-progress-bar {
    width: 100%;
    background-color: #eff4f7;
    margin-bottom: 18px;
    overflow: hidden;
    padding-bottom: 0px
    }
    
    .atomic-content-25-percent {
    color: #ffffff;
    font-weight: 700;
    background-color: #64acc1;
    padding-right: 20px;
    padding-left: 20px;
    text-align: right;
    padding-top: 4px;
    padding-bottom: 4px
    }
    
    .atomic-iconblock-20-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-20-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-20-icon {
    margin-bottom: 16px
    }
    
    .atomic-iconblock-20-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-20-text {
    font-size: 18px;
    color: #2b2c27;
    font-weight: 400;
    line-height: 1.6;
    margin-bottom: 47px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-21-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-21-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-21-icon {
    margin-bottom: 16px
    }
    
    .atomic-content-30-column {
    text-align: left
    }
    
    .atomic-content-30-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-30-column.oxy-easy-posts .oxy-posts,.atomic-content-30-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start
    }
    
    .atomic-content-30-wrapper {
    width: 100%;
    background-color: #eff4fb;
    text-align: center
    }
    
    .atomic-content-30-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-content-30-wrapper.oxy-easy-posts .oxy-posts,.atomic-content-30-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
    }
    
    .atomic-content-30-popup:hover {
    opacity: 1
    }
    
    .atomic-content-30-popup {
    padding-top: 60px;
    padding-bottom: 60px;
    padding-left: 60px;
    padding-right: 60px;
    background-color: rgba(86,109,143,0.8);
    width: 100%;
    text-align: center;
    opacity: 0
    }
    
    .atomic-content-30-popup:not(.ct-section):not(.oxy-easy-posts),.atomic-content-30-popup.oxy-easy-posts .oxy-posts,.atomic-content-30-popup.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-small-button:hover {
    background-color: #6799b2;
    color: #ffffff
    }
    
    .atomic-small-button {
    background-color : #1e73be;
    border: 1px solid #1e73be;
    color: #ffffff;
    padding: 10px 16px
    }
    
    .atomic-small-button {
    background-color: #64acc1;
    font-size: 14px;
    font-weight: 700;
    color: #ffffff;
    padding-right: 18px;
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 1.2;
    letter-spacing: 1px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    padding-left: 18px;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .atomic-content-30-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    margin-top: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-showcase-7-image {
    width: 33.33%
    }
    
    @media (max-width: 991px) {
    .atomic-showcase-7-image {
        width:50%
    }
    }
    
    @media (max-width: 479px) {
    .atomic-showcase-7-image {
        width:100%
    }
    }
    
    .atomic-content-31-text-column {
    }
    
    @media (max-width: 991px) {
    .atomic-content-31-text-column {
        width:NaNpx
    }
    }
    
    .atomic-content-31-wrapper {
    width: 100%;
    background-color: #ffffff;
    padding-top: 40px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    text-align: left;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    .atomic-content-31-title {
    font-size: 20px;
    color: #566d8f;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-31-small-text {
    font-size: 14px;
    color: #898989;
    font-weight: 400;
    margin-bottom: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-31-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-31-middle-column {
    text-align: center;
    position: relative
    }
    
    .atomic-content-31-middle-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-31-middle-column.oxy-easy-posts .oxy-posts,.atomic-content-31-middle-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start
    }
    
    @media (max-width: 991px) {
    .atomic-content-31-middle-column {
        text-align:left
    }
    
    .atomic-content-31-middle-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-31-middle-column.oxy-easy-posts .oxy-posts,.atomic-content-31-middle-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: flex-start
    }
    }
    
    @media (max-width: 767px) {
    .atomic-content-31-middle-column {
        text-align:center
    }
    
    .atomic-content-31-middle-column:not(.ct-section):not(.oxy-easy-posts),.atomic-content-31-middle-column.oxy-easy-posts .oxy-posts,.atomic-content-31-middle-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center
    }
    }
    
    .atomic-content-31-icon {
    background-color: #566d8f;
    border: 1px solid #566d8f;
    padding: 24px;
    color: #ffffff
    }
    
    .atomic-content-31-icon >svg {
    width: 42px;
    height: 42px
    }
    
    .atomic-content-31-icon {
    position: absolute;
    z-index: 100
    }
    
    .atomic-content-31-line {
    height: 100%
    }
    
    @media (max-width: 991px) {
    .atomic-content-31-line {
        margin-left:47px
    }
    }
    
    @media (max-width: 767px) {
    .atomic-content-31-line {
        margin-left:0px
    }
    
    .atomic-content-31-line:not(.ct-section):not(.oxy-easy-posts),.atomic-content-31-line.oxy-easy-posts .oxy-posts,.atomic-content-31-line.ct-section .ct-section-inner-wrap {
        display: none;
        flex-direction: unset
    }
    }
    
    .atomic-testimonial-2-author {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-testimonial-2-small-text {
    color: #898989;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-contact-10-wrapper {
    width: 100%;
    margin-bottom: 18px;
    text-align: left;
    margin-left: 0px
    }
    
    .atomic-contact-10-wrapper:not(.ct-section):not(.oxy-easy-posts),.atomic-contact-10-wrapper.oxy-easy-posts .oxy-posts,.atomic-contact-10-wrapper.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-content: center;
    justify-content: center
    }
    
    .atomic-contact-10-icon {
    color: #ff6851
    }
    
    .atomic-contact-10-icon >svg {
    width: 24px;
    height: 24px
    }
    
    .atomic-contact-10-icon {
    margin-right: 12px
    }
    
    .atomic-contact-10-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 24px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-content-25-column {
    }
    
    .atomic-content-25-price {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #4887bf
    }
    
    .atomic-content-35-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.2;
    letter-spacing: .12em;
    text-align: left;
    margin-bottom: 12px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-hero-8-icon {
    color: #64acc1
    }
    
    .atomic-hero-8-icon >svg {
    width: 24px;
    height: 24px
    }
    
    .atomic-hero-8-icon {
    margin-bottom: 18px
    }
    
    .atomic-hero-8-text {
    color: #ffffff;
    font-size: 24px;
    font-weight: 300;
    line-height: 1.6;
    font-style: italic;
    max-width: 640px;
    margin-bottom: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-hero-8-avatar {
    width: 120px;
    border-radius: 100%;
    margin-bottom: 12px
    }
    
    .atomic-hero-8-title {
    color: #ffffff;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-11-wrapper {
    background-color: #ffffff;
    padding-top: 30px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
    width: 46%;
    margin-top: 2%;
    margin-left: 2%;
    margin-right: 2%;
    margin-bottom: 2%;
    box-shadow: 0px 20px 40px rgba(0,0,0,0.1)
    }
    
    @media (max-width: 767px) {
    .atomic-iconblock-11-wrapper {
        width:98%
    }
    }
    
    .atomic-iconblock-11-icon {
    color: #566d8f
    }
    
    .atomic-iconblock-11-icon >svg {
    width: 30px;
    height: 30px
    }
    
    .atomic-iconblock-11-icon {
    margin-bottom: 16px
    }
    
    .atomic-iconblock-11-title {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.1;
    letter-spacing: .12em;
    margin-bottom: 8px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-iconblock-11-text {
    color: #3b3c38;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-showcase-5-image {
    margin-bottom: 42px
    }
    
    @media (max-width: 767px) {
    .atomic-showcase-5-image {
        width:100%
    }
    }
    
    .atomic-gridbased-1-image {
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #eff4fb;
    border-right-color: #eff4fb;
    border-bottom-color: #eff4fb;
    border-left-color: #eff4fb;
    margin-bottom: 12px
    }
    
    .atomic-gridbased-1-text {
    margin-bottom: 48px;
    color: #3b3c38;
    font-size: 18px;
    text-align: left;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 300
    }
    
    .atomic-testimonial-1-column {
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-width: 6px;
    border-right-width: 6px;
    border-bottom-width: 6px;
    border-left-width: 6px;
    border-top-color: #eff4fb;
    border-right-color: #eff4fb;
    border-bottom-color: #eff4fb;
    border-left-color: #eff4fb;
    text-align: center
    }
    
    .atomic-testimonial-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-testimonial-1-column.oxy-easy-posts .oxy-posts,.atomic-testimonial-1-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    align-items: center
    }
    
    .atomic-testimonial-1-quote {
    color: #566d8f
    }
    
    .atomic-testimonial-1-quote >svg {
    width: 36px;
    height: 36px
    }
    
    .atomic-testimonial-1-quote {
    margin-bottom: 12px
    }
    
    .atomic-testimonial-1-text {
    font-size: 18px;
    color: #3b3c38;
    font-weight: 300;
    font-style: italic;
    margin-bottom: 32px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-testimonial-1-avatar {
    width: 60px;
    border-radius: 100px;
    margin-bottom: 12px;
    margin-top: auto
    }
    
    .atomic-testimonial-1-author {
    color: #566d8f;
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 18px;
    letter-spacing: 1px;
    line-height: 1.2;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-1-row-light {
    width: 100%;
    background-color: #ffffff;
    min-width: 640px;
    overflow: scroll
    }
    
    .atomic-pricing-1-row-light:not(.ct-section):not(.oxy-easy-posts),.atomic-pricing-1-row-light.oxy-easy-posts .oxy-posts,.atomic-pricing-1-row-light.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row
    }
    
    .atomic-pricing-1-title {
    width: 33.33%;
    text-align: left;
    padding-top: 18px;
    padding-bottom: 18px;
    padding-left: 18px;
    padding-right: 18px;
    font-weight: 500;
    font-size: 20px;
    color: #566d8f;
    line-height: 1.1;
    letter-spacing: 0.5px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-1-row-dark {
    width: 100%;
    background-color: #eff4f7;
    min-width: 640px;
    overflow: scroll
    }
    
    .atomic-pricing-1-row-dark:not(.ct-section):not(.oxy-easy-posts),.atomic-pricing-1-row-dark.oxy-easy-posts .oxy-posts,.atomic-pricing-1-row-dark.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap
    }
    
    .atomic-pricing-1-text {
    font-size: 18px;
    color: #2b2c27;
    width: 33.33%;
    padding-top: 18px;
    padding-bottom: 18px;
    padding-left: 18px;
    padding-right: 18px;
    text-align: left;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
    }
    
    .atomic-pricing-1-link:hover {
    color: #566d8f
    }
    
    .atomic-pricing-1-link {
    font-size: 18px;
    padding-top: 18px;
    padding-bottom: 18px;
    padding-left: 18px;
    padding-right: 18px;
    width: 33.33%;
    text-align: left;
    color: #6799b2;
    text-decoration: underline;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.5s;
    transition-timing-function: ease;
    transition-property: all
    }
    
    .atomic-footer-1-column {
    }
    
    .atomic-footer-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-footer-1-column.oxy-easy-posts .oxy-posts,.atomic-footer-1-column.ct-section .ct-section-inner-wrap {
    display: flex;
    flex-direction: column;
    justify-content: center
    }
    
    @media (max-width: 767px) {
    .atomic-footer-1-column {
        text-align:center
    }
    
    .atomic-footer-1-column:not(.ct-section):not(.oxy-easy-posts),.atomic-footer-1-column.oxy-easy-posts .oxy-posts,.atomic-footer-1-column.ct-section .ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: center
    }
    }
    
    .alignleft {
    }
    
    @media (max-width: 767px) {
    .alignleft {
        float:left
    }
    }
    
    @media (max-width: 479px) {
    .alignleft {
        float:left
    }
    }
    
    .alignright {
    margin-bottom: 0px
    }
    
    .gform_wrapper {
    }
    
    .gform_wrapper ul.gform_fields li.gfield,.gform_wrapper .top_label li.gfield.gf_right_half {
    padding-right: 0
    }
    
    .partial_entry_warning {
    display: none !important
    }
    
    body .gform_wrapper {
    padding: 10px 20px 0 20px;
    background-color: #F8F9FA;
    color: black;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    border-radius: 0px!important
    }
    
    .gfield_label {
    font-weight: 400 !important;
    font-size: 16px !important
    }
    
    .gsection_title {
    font-weight: 400 !important;
    color: #4887bf !important
    }
    
    input[type=text],textarea,input[type=password],[type="search"],[type="date"],[type="email"] {
    background: #ffffff;
    border: solid 1px rgba(225,225,225,0.85);
    border-radius: 0;
    color: #4d4d4d !important;
    font-weight: 400 !important;
    padding: 15px 12px !important;
    font: inherit
    }
    
    [type="tel"] {
    background: #ffffff;
    border: solid 1px rgba(225,225,225,0.85);
    border-radius: 0;
    color: #4d4d4d !important;
    font-weight: 400 !important;
    padding: 15px 0px 12px 75px !important;
    font: inherit
    }
    
    .gform_wrapper .gfield_radio {
    margin-left: 0.5rem;
    margin-bottom: 0.25rem
    }
    
    .gform_wrapper .gfield_checkbox {
    margin-left: 0.5rem;
    margin-bottom: 0.25rem
    }
    
    .gform_wrapper .gform_body .gform_fields .gfield select {
    background: #ffffff;
    border: solid 1px rgba(225,225,225,0.85);
    border-radius: 0;
    color: #4d4d4d !important;
    font-weight: 700 !important;
    letter-spacing: 1px !important;
    padding: 17px 15px !important
    }
    
    input:focus,input[type=text]:focus,input.text:focus,input.title:focus,textarea:focus {
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.2);
    border: solid 1px rgba(225,225,225,0.75)
    }
    
    .gform_wrapper textarea.large {
    margin-top: 6px;
    height: 8em !important;
    transition: height .3s ease-out !important
    }
    
    .gform_wrapper textarea.medium {
    margin-top: 6px;
    height: 10em !important;
    transition: height .3s ease-out
    }
    
    .gform_wrapper textarea.medium:focus {
    height: 25em
    }
    
    .gform_wrapper input[type=submit] {
    cursor: pointer;
    text-transform: capitalize;
    font: inherit;
    font-weight: 300;
    padding: 12px 25px;
    width: 150px;
    border-radius: 0;
    background: #ff6851;
    color: #f7f7f7;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    border-radius: 3px;
    transition: box-shadow .2s ease-in-out
    }
    
    .gform_wrapper input[type=image] {
    cursor: pointer;
    text-transform: capitalize;
    font: inherit;
    font-weight: 300;
    padding: 12px 25px;
    width: 150px;
    border-radius: 5px !important;
    background: #ff6851 !important;
    color: #f7f7f7;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    border-radius: 3px
    }
    
    .gform_wrapper input[type=submit]:hover {
    background: #e65e49;
    color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2)
    }
    
    .gform_wrapper input[type=image]:hover {
    background: #e65e49 !important;
    color: #fff
    }
    
    .gform_wrapper .gform_body .gform_page_footer .gform_next_button {
    cursor: pointer;
    text-transform: capitalize;
    font-weight: 300;
    padding: 10px 12px;
    border-radius: 0;
    background: #137d7d;
    color: #f7f7f7;
    border: none;
    border-radius: 3px;
    transition: box-shadow .2s ease-in-out
    }
    
    .gform_wrapper .gform_body .gform_page_footer .gform_next_button:hover {
    background: #e28b00;
    color: #fff;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,.2)
    }
    
    .gform_wrapper .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage {
    background-color: #43b5ac
    }
    
    img.alignright {
    float: right;
    margin: 0 0 2em 2em
    }
    
    img.alignleft {
    float: left;
    margin: 0 2em 2em 0
    }
    
    img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto
    }
    
    .alignright {
    float: right
    }
    
    .alignleft {
    float: left
    }
    
    .aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto
    }
    
    @media only screen and (max-width: 600px) {
    img.alignleft,.alignleft,img.alignright,.alignright {
        float:none;
        margin-right: 0
    }
    }
    .xash-buton{
      font-size: 39px;
    }
    
</style>

@endsection


@section('content')
<div id="inner_content-19-225" class="ct-inner-content">
    <section id="section-2-224"
      class=" ct-section ct-section-with-shape-divider">
        <div class="ct-section-inner-wrap">
            <div id="new_columns-1649-6078" class="ct-new-columns">
                <div id="div_block-1650-6078" class="ct-div-block">
                    <h2 id="headline-4-224"
                      class="ct-headline atomic-primary-heading">Sell My House
                        Fast Online Quote</h2>
                    <div id="div_block-1661-6078"
                      class="ct-div-block atomic-steps-1-wrapper">
                        <div id="div_block-1662-6078"
                          class="ct-div-block atomic-steps-1-digit-wrapper">
                            <h4 id="headline-1663-6078"
                              class="ct-headline atomic-steps-1-digit">1</h4>
                            <div id="div_block-1664-6078" class="ct-div-block">
                            </div>
                        </div>
                        <div id="div_block-1665-6078"
                          class="ct-div-block atomic-steps-1-text-wrapper">
                            <div id="text_block-1667-6078"
                              class="ct-text-block atomic-steps-1-text"><b>Fill
                                    out the form, and we will connect you with
                                    an expert local cash buyer.</b></div>
                        </div>
                    </div>
                    <div id="div_block-1685-6078"
                      class="ct-div-block atomic-steps-1-wrapper">
                        <div id="div_block-1686-6078"
                          class="ct-div-block atomic-steps-1-digit-wrapper">
                            <h4 id="headline-1687-6078"
                              class="ct-headline atomic-steps-1-digit">2</h4>
                            <div id="div_block-1688-6078" class="ct-div-block">
                            </div>
                        </div>
                        <div id="div_block-1689-6078"
                          class="ct-div-block atomic-steps-1-text-wrapper">
                            <div id="text_block-1690-6078"
                              class="ct-text-block atomic-steps-1-text">
                                <b>Receive a cash online quote for your house
                                    from a local investor.</b></div>
                        </div>
                    </div>
                    <div id="div_block-1691-6078"
                      class="ct-div-block atomic-steps-1-wrapper">
                        <div id="div_block-1692-6078"
                          class="ct-div-block atomic-steps-1-digit-wrapper">
                            <h4 id="headline-1693-6078"
                              class="ct-headline atomic-steps-1-digit">3</h4>
                            <div id="div_block-1694-6078" class="ct-div-block">
                            </div>
                        </div>
                        <div id="div_block-1695-6078"
                          class="ct-div-block atomic-steps-1-text-wrapper">
                            <div id="text_block-1696-6078"
                              class="ct-text-block atomic-steps-1-text"><b>Get
                                    cash for your house! We close on your home
                                    selling timeline.</b></div>
                        </div>
                    </div>
                    <p id="text_block-1657-6078"
                      class="ct-text-block atomic-content-26-text"><b>No Risk.
                            No Obligations. Hassle Free.</b></p>
                </div>
                <div id="div_block-1651-6078" class="ct-div-block">
                    <div id="shortcode-678-106" class="ct-shortcode">
                        <script type="text/javascript"></script>
                        <div
                          class="gf_browser_gecko gform_wrapper gravity-theme"
                          id="gform_wrapper_1">
                            <div id="gf_1" class="gform_anchor" tabindex="-1">
                            </div>
                            <div class="gform_heading">
                                <p class="gform_required_legend"></p>
                            </div>
                            <div class="partial_entry_warning"
                              style="margin-bottom: 10px;">.</div>
                            <form method="post" enctype="multipart/form-data"
                              target="gform_ajax_frame_1" id="gform_1"
                              action="/sell-my-house-fast-online-quote/#gf_1"
                              novalidate=""><input id="partial_entry_id_1"
                                  class="partial_entry_id" type="hidden"
                                  name="partial_entry_id" value="pending"
                                  data-form_id="1">
                                <div class="gform_body gform-body">
                                    <div id="gform_fields_1"
                                      class="gform_fields top_label form_sublabel_below description_below">
                                        <div id="field_1_6"
                                          class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_6"><label
                                              class="gfield_label"
                                              for="input_1_6">Property
                                                Address<span
                                                  class="gfield_required"><span
                                                      class="gfield_required gfield_required_asterisk">*</span></span></label>
                                            <div
                                              class="ginput_container ginput_container_text">
                                                <input name="input_6"
                                                  id="input_1_6" type="text"
                                                  value=""
                                                  class="large pac-target-input"
                                                  aria-required="true"
                                                  aria-invalid="false"
                                                  placeholder="Enter a location"
                                                  autocomplete="password">
                                            </div>
                                        </div>
                                        <fieldset id="field_1_4"
                                          class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden"
                                          data-js-reload="field_1_4">
                                            <div class="admin-hidden-markup"><i
                                                  class="gform-icon gform-icon--hidden"></i><span>Hidden</span>
                                            </div>
                                            <legend
                                              class="gfield_label gfield_label_before_complex">
                                                Address Autofill</legend>
                                            <div
                                              class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address"
                                              id="input_1_4">
                                                <span
                                                  class="ginput_full address_line_1 ginput_address_line_1"
                                                  id="input_1_4_1_container">
                                                    <input type="text"
                                                      name="input_4.1"
                                                      id="input_1_4_1" value=""
                                                      aria-required="false">
                                                    <label for="input_1_4_1"
                                                      id="input_1_4_1_label">Street
                                                        Address</label>
                                                </span><span
                                                  class="ginput_full address_line_2 ginput_address_line_2"
                                                  id="input_1_4_2_container">
                                                    <input type="text"
                                                      name="input_4.2"
                                                      id="input_1_4_2" value=""
                                                      aria-required="false">
                                                    <label for="input_1_4_2"
                                                      id="input_1_4_2_label">Address
                                                        Line 2</label>
                                                </span><span
                                                  class="ginput_left address_city ginput_address_city"
                                                  id="input_1_4_3_container">
                                                    <input type="text"
                                                      name="input_4.3"
                                                      id="input_1_4_3" value=""
                                                      aria-required="false">
                                                    <label for="input_1_4_3"
                                                      id="input_1_4_3_label">City</label>
                                                </span><span
                                                  class="ginput_right address_state ginput_address_state"
                                                  id="input_1_4_4_container">
                                                    <input type="text"
                                                      name="input_4.4"
                                                      id="input_1_4_4" value=""
                                                      aria-required="false">
                                                    <label for="input_1_4_4"
                                                      id="input_1_4_4_label">State
                                                        / Province /
                                                        Region</label>
                                                </span><span
                                                  class="ginput_left address_zip ginput_address_zip"
                                                  id="input_1_4_5_container">
                                                    <input type="text"
                                                      name="input_4.5"
                                                      id="input_1_4_5" value=""
                                                      aria-required="false">
                                                    <label for="input_1_4_5"
                                                      id="input_1_4_5_label">ZIP
                                                        / Postal Code</label>
                                                </span><span
                                                  class="ginput_right address_country ginput_address_country"
                                                  id="input_1_4_6_container">
                                                    <select name="input_4.6"
                                                      id="input_1_4_6"
                                                      aria-required="false">
                                                        <option value=""
                                                          selected="selected">
                                                        </option>
                                                        <option
                                                          value="United States">
                                                            United States
                                                        </option>
                                                        <option value="Canada">
                                                            Canada</option>
                                                    </select>
                                                    <label for="input_1_4_6"
                                                      id="input_1_4_6_label">Country</label>
                                                </span>
                                                <div
                                                  class="gf_clear gf_clear_complex">
                                                </div>
                                            </div><input type="hidden"
                                              name="gpaa_coords_4"
                                              class="gform_hidden" value="">
                                        </fieldset>
                                        <div id="field_1_2"
                                          class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_2"><label
                                              class="gfield_label"
                                              for="input_1_2">Phone</label>
                                            <div
                                              class="ginput_container ginput_container_phone">
                                                <div
                                                  class="iti iti--allow-dropdown iti--separate-dial-code">
                                                    <div
                                                      class="iti__flag-container">
                                                        <div
                                                          class="iti__selected-flag"
                                                          role="combobox"
                                                          aria-controls="iti-0__country-listbox"
                                                          aria-owns="iti-0__country-listbox"
                                                          aria-expanded="false"
                                                          tabindex="0"
                                                          title="United States: +1"
                                                          aria-activedescendant="iti-0__item-us-preferred">
                                                            <div
                                                              class="iti__flag iti__us">
                                                            </div>
                                                            <div
                                                              class="iti__selected-dial-code">
                                                                +1</div>
                                                            <div
                                                              class="iti__arrow">
                                                            </div>
                                                        </div>
                                                        <ul
                                                          class="iti__country-list iti__hide"
                                                          id="iti-0__country-listbox"
                                                          role="listbox"
                                                          aria-label="List of countries">
                                                            <li
                                                              class="iti__country iti__preferred iti__active"
                                                              tabindex="-1"
                                                              id="iti-0__item-us-preferred"
                                                              role="option"
                                                              data-dial-code="1"
                                                              data-country-code="us"
                                                              aria-selected="true">
                                                                <div
                                                                  class="iti__flag-box">
                                                                    <div
                                                                      class="iti__flag iti__us">
                                                                    </div>
                                                                </div><span
                                                                  class="iti__country-name">United
                                                                    States</span><span
                                                                  class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li
                                                              class="iti__divider"
                                                              role="separator"
                                                              aria-disabled="true">
                                                            </li>
                                                            <li
                                                              class="iti__country iti__standard"
                                                              tabindex="-1"
                                                              id="iti-0__item-ca"
                                                              role="option"
                                                              data-dial-code="1"
                                                              data-country-code="ca"
                                                              aria-selected="false">
                                                                <div
                                                                  class="iti__flag-box">
                                                                    <div
                                                                      class="iti__flag iti__ca">
                                                                    </div>
                                                                </div><span
                                                                  class="iti__country-name">Canada</span><span
                                                                  class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li
                                                              class="iti__country iti__standard"
                                                              tabindex="-1"
                                                              id="iti-0__item-us"
                                                              role="option"
                                                              data-dial-code="1"
                                                              data-country-code="us"
                                                              aria-selected="false">
                                                                <div
                                                                  class="iti__flag-box">
                                                                    <div
                                                                      class="iti__flag iti__us">
                                                                    </div>
                                                                </div><span
                                                                  class="iti__country-name">United
                                                                    States</span><span
                                                                  class="iti__dial-code">+1</span>
                                                            </li>
                                                        </ul>
                                                    </div><input name=""
                                                      id="input_1_2_raw"
                                                      type="tel" value=""
                                                      class="large"
                                                      placeholder="###-###-####"
                                                      aria-invalid="false"
                                                      autocomplete="off"
                                                      data-intl-tel-input-id="0"
                                                      style="padding-left: 73px;"><input
                                                      type="hidden"
                                                      name="input_2"
                                                      id="input_1_2">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="field_1_3"
                                          class="gfield gfield--width-half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_3"><label
                                              class="gfield_label"
                                              for="input_1_3">Email<span
                                                  class="gfield_required"><span
                                                      class="gfield_required gfield_required_asterisk">*</span></span></label>
                                            <div
                                              class="ginput_container ginput_container_email">
                                                <input name="input_3"
                                                  id="input_1_3" type="email"
                                                  value="" class="large"
                                                  aria-required="true"
                                                  aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_1_7"
                                          class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_7">
                                            <div
                                              class="ginput_container ginput_container_text">
                                                <input name="input_7"
                                                  id="input_1_7" type="hidden"
                                                  class="gform_hidden"
                                                  aria-invalid="false"
                                                  value="https://www.sellmyhousefast.com/sell-my-house-fast-online-quote/">
                                            </div>
                                        </div>
                                        <div id="field_1_8"
                                          class="gfield gfield--width-full gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_8">
                                            <div
                                              class="ginput_container ginput_container_text">
                                                <input name="input_8"
                                                  id="input_1_8" type="hidden"
                                                  class="gform_hidden"
                                                  aria-invalid="false"
                                                  value="FBAFB097-3B97-5E90-E9FD-DFAECD72774E">
                                            </div>
                                        </div>
                                        <div id="field_1_9"
                                          class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_hidden"
                                          data-js-reload="field_1_9"><input
                                              id="input_8" name="input_1_8"
                                              type="hidden" value=""></div>
                                        <div id="field_1_10"
                                          class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"
                                          data-js-reload="field_1_10"><label
                                              class="gfield_label"
                                              for="input_1_10">Name</label>
                                            <div class="ginput_container"><input
                                                  name="input_10"
                                                  id="input_1_10" type="text"
                                                  value=""
                                                  autocomplete="new-password">
                                            </div>
                                            <div class="gfield_description"
                                              id="gfield_description_1_10">This
                                                field is for validation purposes
                                                and should be left unchanged.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gform_footer top_label"> 
                                  <button class="xash-buton">Get My Cash Offer!</button>               
                                </div>
                            </form>
                        </div>
                        <iframe style="display:none;width:0px;height:0px;"
                          src="about:blank" name="gform_ajax_frame_1"
                          id="gform_ajax_frame_1"
                          title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe>
                        <script>
                            gform.initializeOnLoaded( function() {gformInitSpinner( 1, '//www.sellmyhousefast.com/wp-content/plugins/gravityforms/images/spinner.svg' );jQuery('#gform_ajax_frame_1').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_1').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_1').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner( 1, '//www.sellmyhousefast.com/wp-content/plugins/gravityforms/images/spinner.svg' );jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting_1'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_1').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting_1'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_1').text());}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );
                        </script>
                    </div>
                </div>
            </div>
            <div id="-shape-divider-1647-106" class="oxy-shape-divider ">
                <div class="oxy_shape_divider">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="currentColor" fill-opacity="1"
                          d="M0,288L1440,0L1440,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section id="section-216-106" class=" ct-section">
      <div class="ct-section-inner-wrap">
          <h2 id="headline-217-106"
            class="ct-headline atomic-secondary-heading">How Do I Sell My
              House Fast?</h2>
          <p id="text_block-1565-106"
            class="ct-text-block atomic-content-26-text">At Sell My House
              Fast, we buy homes for cash, <i style="">and</i> we connect
              you with a local cash buyer! <b>This allows sellers to work
                  with a house buyer who can offer <i style="">more</i>
                  because they know the area better than national real
                  estate investors. </b>We want to enhance your selling
              experience by giving you access to a cash home buyer who
              operates exclusively in your market.<br></p>
          <div id="new_columns-219-106" class="ct-new-columns">
              <div id="div_block-220-106" class="ct-div-block">
                  <div id="div_block-221-106"
                    class="ct-div-block atomic-iconblock-15-wrapper">
                      <div id="div_block-1272-106" class="ct-div-block">
                          <p id="text_block-1292-106"
                            class="ct-text-block">Step 1</p>
                      </div>
                      <p id="text_block-1303-106" class="ct-text-block">
                          FILL OUT FORM</p><img loading="lazy"
                        id="image-1317-106" alt="sale my home fast"
                        src="{{asset('assets/images/icons/fill_out_form.png')}}"
                        class="ct-image"
                        sizes="(max-width: 512px) 100vw, 512px"
                        alt="sale my home fast" />
                      <p id="text_block-1305-106" class="ct-text-block">
                          Fill out the form, and we will connect you with
                          a local cash buyer.</p>
                  </div>
              </div>
              <div id="div_block-1288-106" class="ct-div-block">
                  <div id="div_block-1289-106"
                    class="ct-div-block atomic-iconblock-15-wrapper">
                      <div id="div_block-1290-106" class="ct-div-block">
                          <p id="text_block-1295-106"
                            class="ct-text-block">Step 2</p>
                      </div>
                      <p id="text_block-1314-106" class="ct-text-block">
                          GET OFFERS</p><img loading="lazy"
                        id="image-1318-106" alt="sale my house fast"
                        src="{{asset('assets/images/icons/get_offer.png')}}"
                        class="ct-image"
                        sizes="(max-width: 512px) 100vw, 512px"
                        alt="sale my house fast" />
                      <p id="text_block-1309-106" class="ct-text-block">
                          Receive a CASH offer for your house from a local
                          buyer. No obligations.</p>
                  </div>
              </div>
              <div id="div_block-1284-106" class="ct-div-block">
                  <div id="div_block-1285-106"
                    class="ct-div-block atomic-iconblock-15-wrapper">
                      <div id="div_block-1286-106" class="ct-div-block">
                          <p id="text_block-1296-106"
                            class="ct-text-block">Step 3</p>
                      </div>
                      <p id="text_block-1319-106" class="ct-text-block">
                          GET PAID</p><img loading="lazy"
                        id="image-1323-106" alt="sale house fast"
                        src="{{asset('assets/images/icons/get_paid.png')}}"
                        class="ct-image"
                        sizes="(max-width: 512px) 100vw, 512px"
                        alt="sale house fast" />
                      <p id="text_block-1321-106" class="ct-text-block">
                          Get cash for your house! Close on your timeline.
                          No hassles.</p>
                  </div>
              </div>
          </div>
          <p id="text_block-1569-106"
            class="ct-text-block atomic-content-26-text">Our home sale
              process is simple. Unlike a big home buying corporation or
              ibuyer, you will work with a local real estate buyer who
              specializes in your market. This leads to higher cash
              offers, faster home sales, and happier home
              sellers!<b></b><br></p>
      </div>
  </section>
    <section id="section-236-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="code_block-932-106" class="ct-code-block"><a
                  id="sell-house-as-is"></a></div>
            <h2 id="headline-237-106"
              class="ct-headline atomic-secondary-heading">Online Quote From a
                Local Investor</h2>
            <div id="new_columns-1640-106" class="ct-new-columns">
                <div id="div_block-1641-106" class="ct-div-block">
                    <p id="text_block-1646-106"
                      class="ct-text-block atomic-content-26-text">At Sell My
                        House Fast, we connect sellers with a cash buyer
                        exclusive to their market. This means you receive an
                        expert online quote from a reputable investor. Unlike
                        big corporations and “ibuyers,” our investors are local
                        meaning they know their own markets best. This allows
                        sellers to receive higher cash offers and faster
                        closings.<b></b><br></p>
                </div>
            </div>
        </div>
    </section>
    <section id="section-609-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <h2 id="headline-610-106"
              class="ct-headline atomic-secondary-heading">Receive An Online
                Quote In Any Situation</h2>
            <div id="new_columns-1716-6078" class="ct-new-columns">
                <ul id="div_block-1717-6078" class="ct-div-block">
                    <li id="text_block-1725-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Facing <a
                              href="/blog/can-you-sell-a-house-in-foreclosure/"><b>foreclosure</b></a>?
                        </div><b></b>
                    </li>
                    <li id="text_block-1730-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Own <a
                              href="/blog/selling-distressed-property/"><b>distressed
                                    property</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1731-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Need to sell with <b><a
                                  href="/blog/how-to-sell-rental-property-with-tenants-in-it/">tenants
                                    in your rental property</a></b>?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1733-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/selling-inherited-property/"><b>Inherited
                                    property</b></a> out of state?</div><b></b>
                    </li>
                    <li id="text_block-1734-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Dealing with a <a
                              href="/blog/selling-a-fire-damaged-house/"><b>fire
                                    damaged house</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1770-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Need to sell a <a
                              href="/blog/selling-a-house-in-probate/"><b>probate
                                    property</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1771-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Overwhelmed with <a
                              href="/blog/can-you-sell-a-house-with-mold/"><b>mold
                                    issues</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1772-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Left with a <a
                              href="/blog/can-you-sell-a-condemned-house/"><b>condemned
                                    house</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1773-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Too many <a
                              href="/blog/selling-a-house-that-needs-repairs/"><b>house
                                    repairs needed</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1774-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Stressed about selling
                            with <b><a
                                  href="/blog/selling-a-house-with-termite-damage/">termite
                                    damage</a></b>?</div><b></b>
                    </li>
                    <li id="text_block-1775-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Burdened with a <a
                              href="/blog/selling-a-house-in-poor-condition/"><b>house
                                    in poor condition</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1776-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Tired landlord <b><a
                                  href="/blog/how-to-sell-rental-property/">selling
                                    rental property</a></b>?</div><b></b>
                    </li>
                    <li id="text_block-1777-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/selling-a-house-with-a-lien/"><b>Selling
                                    a house with a lien?</b></a></div><b></b>
                    </li>
                    <li id="text_block-1778-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Getting rid of a <a
                              href="/blog/how-to-sell-a-fixer-upper-house-fast/"><b>fixer
                                    upper</b></a> house fast?</div><b></b>
                    </li>
                    <li id="text_block-1779-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/can-i-sell-my-house-if-im-behind-on-payments/"><b>Behind
                                    on house payments?</b></a></div><b></b>
                    </li>
                    <li id="text_block-1780-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Stuck with a <a
                              href="/blog/selling-a-house-with-storm-damage/"><b>storm
                                    damaged house</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1781-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Does selling a house for
                            <a
                              href="/blog/benefits-of-selling-a-house-for-cash/"><b>cash
                                    have benefits</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1782-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Is there a <a
                              href="/blog/st-joseph-prayer-to-sell-house/"><b>prayer
                                    for selling a house</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1783-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">How can I get <a
                              href="/blog/how-to-get-rid-of-bad-tenants/"><b>rid
                                    of bad tenants</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1784-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Not sure <a
                              href="/blog/who-has-to-leave-the-house-in-a-divorce/"><b>who
                                    has to leave the house during a
                                    divorce</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1785-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Recently <b><a
                                  href="/blog/inheriting-a-house-with-siblings/">inherited
                                    a home with siblings</a></b>?</div><b></b>
                    </li>
                    <li id="text_block-1817-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wanting to <a
                              href="/blog/selling-my-house-and-moving-to-another-state/"><b>move
                                    states</b></a> but need to sell?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1819-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wondering why <a
                              href="/blog/lender-required-repairs-on-a-home/"><b>lenders
                                    require repairs</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1820-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Can houses <a
                              href="/blog/can-i-sell-my-house-below-market-value/"><b>sell
                                    below market value</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1821-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wondering if you can sell
                            with a <a
                              href="/blog/can-you-sell-your-home-if-you-have-a-heloc/"><b>HELOC</b></a>?
                        </div><b></b>
                    </li>
                    <li id="text_block-1822-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Curious how long is <a
                              href="/blog/how-long-does-it-take-to-relocate-for-a-job/"><b>relocation
                                    for a job</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1823-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wondering if you will
                            lose money <a
                              href="/blog/how-much-do-you-lose-selling-a-house-as-is/"><b>selling
                                    as-is</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1880-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Selling a house with an
                            <a href="/blog/selling-a-house-with-an-old-roof/"><b>old
                                    roof</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1881-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Want to <a
                              href="/blog/can-i-sell-my-house-and-still-live-in-it/"><b>sell
                                    your house and still live in it</b></a>?
                        </div><b></b>
                    </li>
                    <li id="text_block-1911-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Needing a <a
                              href="/foundation-inspection/"><b>foundation
                                    inspection</b></a>?</div><b></b>
                    </li>
                </ul>
                <ul id="div_block-1718-6078" class="ct-div-block">
                    <li id="text_block-1729-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Own a property with <a
                              href="/blog/selling-a-house-with-code-violations/"><b>code
                                    violations</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1740-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Need to suddenly <a
                              href="/blog/selling-house-for-job-relocation/"><b>relocate
                                    for a job</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1741-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Want to avoid selling
                            with a real estate agent?</div><b></b>
                    </li>
                    <li id="text_block-1742-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Going through a <a
                              href="/blog/selling-a-house-during-divorce/"><b>divorce</b></a>?
                        </div><b></b>
                    </li>
                    <li id="text_block-1743-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Stuck with a <a
                              href="/blog/how-to-sell-a-hoarder-house/"><b>hoarder
                                    house</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1786-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Need to get rid of a
                            house with <a
                              href="/blog/selling-a-house-with-water-damage/"><b>water
                                    damage</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1787-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/selling-a-house-with-foundation-issues/"><b>Foundation
                                    issues</b></a> and structural damage?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1788-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/how-to-sell-a-house-by-owner/"><b>Selling
                                    a house by owner</b></a> taking too long?
                        </div><b></b>
                    </li>
                    <li id="text_block-1789-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Have an <a
                              href="/blog/can-you-sell-a-house-with-asbestos/"><b>old
                                    house with asbestos</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1790-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Trying to sell with a <a
                              href="/blog/can-i-sell-my-house-with-a-failed-septic-system/"><b>failed
                                    septic system</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1791-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><a
                              href="/blog/selling-parents-house-before-death/"><b>Selling
                                    a parents house <i>before</i> death?</b></a>
                        </div><b></b>
                    </li>
                    <li id="text_block-1792-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Figuring out whether to
                            <a href="/blog/should-i-sell-my-house-and-rent/"><b>sell
                                    and rent</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1793-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Need to <a
                              href="/blog/how-to-sell-your-house-in-7-days/"><b>sell
                                    your house in 7 days</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1794-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Selling while in <a
                              href="/blog/can-i-sell-my-house-while-in-chapter-13-bankruptcy/"><b>Chapter
                                    13 bankruptcy</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1795-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Facing <a
                              href="/blog/title-problems-at-closing/"><b>title
                                    problems at closing</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1796-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Selling after filing <a
                              href="/blog/can-you-sell-your-house-after-filing-chapter-7-bankruptcy"><b>Chapter
                                    7 bankruptcy</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1797-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">How can I get <a
                              href="/blog/how-to-get-rid-of-squatters/"><b>rid
                                    of squatters</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1798-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Trying to <a
                              href="/blog/can-you-sell-a-house-with-a-mortgage/"><b>sell
                                    with a mortgage</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1799-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wonder if an <a
                              href="/blog/can-an-executor-change-a-will/"><b>executor
                                    can change a Will</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1801-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Trying to pay mortgage
                            after <a
                              href="/blog/lost-my-job-cant-pay-mortgage/"><b>losing
                                    your job</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1846-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Not sure how much <a
                              href="/blog/how-much-equity-should-i-have-before-selling-my-home/"><b>equity
                                    is needed to sell</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1848-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Is there a difference
                            between a <a
                              href="/blog/short-sale-vs-foreclosure/"><b>short
                                    sale and foreclosure</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1849-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Wanting to <a
                              href="/blog/selling-a-house-to-an-investor/"><b>sell
                                    to an investor</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1850-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Interested in <a
                              href="/blog/how-to-sell-your-house-in-5-days/"><b>selling
                                    your house in 5 days</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1851-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Needing to <a
                              href="/blog/sell-a-house-before-2-years/"><b>sell
                                    property before 2 years</b></a>?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1906-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Looking into <a
                              href="/blog/can-you-sell-a-house-before-probate/"><b>selling
                                    a house <i>before</i> probate</b></a>?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1907-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Want to sell after an <a
                              href="/blog/expired-listing-can-i-sell-my-house/"><b>expired
                                    listing</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1908-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Can you <a
                              href="/blog/what-does-it-mean-when-a-house-sells-for-1/"><b>sell
                                    your house for $1</b></a>?</div><b></b>
                    </li>
                    <li id="text_block-1909-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;"><b><a
                                  href="/blog/divorce-appraiser/">Divorce
                                    appraiser</a></b> during a sale?</div>
                        <b></b>
                    </li>
                    <li id="text_block-1912-6078"
                      class="ct-text-block atomic-content-26-text">
                        <div style="text-align: left;">Stuck selling a house
                            with <a
                              href="/blog/selling-a-house-with-unpermitted-work/"><b>unpermitted
                                    work</b></a>?</div><b></b>
                    </li>
                </ul>
            </div>
            <p id="text_block-1749-6078"
              class="ct-text-block atomic-content-26-text"><b><b>If you answered
                        “yes” to any of these, just fill out our form to receive
                        your no obligation online quote!</b></b></p>
        </div>
    </section>
    <section id="section-1596-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="shortcode-1600-106" class="ct-shortcode">
                <div class="gf_browser_gecko gform_wrapper gravity-theme"
                  id="gform_wrapper_6">
                    <div id="gf_6" class="gform_anchor" tabindex="-1"></div>
                    <div class="gform_heading">
                        <p class="gform_required_legend"></p>
                    </div>
                    <div class="partial_entry_warning"
                      style="margin-bottom: 10px;">.</div>
                    <form method="post" enctype="multipart/form-data"
                      target="gform_ajax_frame_6" id="gform_6"
                      action="/sell-my-house-fast-online-quote/#gf_6"
                      novalidate=""><input id="partial_entry_id_6"
                          class="partial_entry_id" type="hidden"
                          name="partial_entry_id" value="pending"
                          data-form_id="6">
                        <div class="gform_body gform-body">
                            <div id="gform_fields_6"
                              class="gform_fields top_label form_sublabel_below description_below">
                                <div id="field_6_6"
                                  class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_6"><label
                                      class="gfield_label"
                                      for="input_6_6">Property Address<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class="ginput_container ginput_container_text">
                                        <input name="input_6" id="input_6_6"
                                          type="text" value=""
                                          class="large pac-target-input"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="Enter a location"
                                          autocomplete="password"> </div>
                                </div>
                                <fieldset id="field_6_4"
                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_6_4">
                                    <div class="admin-hidden-markup"><i
                                          class="gform-icon gform-icon--hidden"></i><span>Hidden</span>
                                    </div>
                                    <legend
                                      class="gfield_label gfield_label_before_complex">
                                        Address Autofill</legend>
                                    <div
                                      class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address"
                                      id="input_6_4">
                                        <span
                                          class="ginput_full address_line_1 ginput_address_line_1"
                                          id="input_6_4_1_container">
                                            <input type="text" name="input_4.1"
                                              id="input_6_4_1" value=""
                                              aria-required="false">
                                            <label for="input_6_4_1"
                                              id="input_6_4_1_label">Street
                                                Address</label>
                                        </span><span
                                          class="ginput_full address_line_2 ginput_address_line_2"
                                          id="input_6_4_2_container">
                                            <input type="text" name="input_4.2"
                                              id="input_6_4_2" value=""
                                              aria-required="false">
                                            <label for="input_6_4_2"
                                              id="input_6_4_2_label">Address
                                                Line 2</label>
                                        </span><span
                                          class="ginput_left address_city ginput_address_city"
                                          id="input_6_4_3_container">
                                            <input type="text" name="input_4.3"
                                              id="input_6_4_3" value=""
                                              aria-required="false">
                                            <label for="input_6_4_3"
                                              id="input_6_4_3_label">City</label>
                                        </span><span
                                          class="ginput_right address_state ginput_address_state"
                                          id="input_6_4_4_container">
                                            <input type="text" name="input_4.4"
                                              id="input_6_4_4" value=""
                                              aria-required="false">
                                            <label for="input_6_4_4"
                                              id="input_6_4_4_label">State /
                                                Province / Region</label>
                                        </span><span
                                          class="ginput_left address_zip ginput_address_zip"
                                          id="input_6_4_5_container">
                                            <input type="text" name="input_4.5"
                                              id="input_6_4_5" value=""
                                              aria-required="false">
                                            <label for="input_6_4_5"
                                              id="input_6_4_5_label">ZIP /
                                                Postal Code</label>
                                        </span><span
                                          class="ginput_right address_country ginput_address_country"
                                          id="input_6_4_6_container">
                                            <select name="input_4.6"
                                              id="input_6_4_6"
                                              aria-required="false">
                                                <option value=""
                                                  selected="selected"></option>
                                                <option value="United States">
                                                    United States</option>
                                                <option value="Canada">Canada
                                                </option>
                                            </select>
                                            <label for="input_6_4_6"
                                              id="input_6_4_6_label">Country</label>
                                        </span>
                                        <div class="gf_clear gf_clear_complex">
                                        </div>
                                    </div><input type="hidden"
                                      name="gpaa_coords_4" class="gform_hidden"
                                      value="">
                                </fieldset>
                                <div id="field_6_2"
                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_2"><label
                                      class="gfield_label"
                                      for="input_6_2">Phone</label>
                                    <div
                                      class="ginput_container ginput_container_phone">
                                        <div
                                          class="iti iti--allow-dropdown iti--separate-dial-code">
                                            <div class="iti__flag-container">
                                                <div class="iti__selected-flag"
                                                  role="combobox"
                                                  aria-controls="iti-1__country-listbox"
                                                  aria-owns="iti-1__country-listbox"
                                                  aria-expanded="false"
                                                  tabindex="0"
                                                  title="United States: +1"
                                                  aria-activedescendant="iti-1__item-us-preferred">
                                                    <div
                                                      class="iti__flag iti__us">
                                                    </div>
                                                    <div
                                                      class="iti__selected-dial-code">
                                                        +1</div>
                                                    <div class="iti__arrow">
                                                    </div>
                                                </div>
                                                <ul
                                                  class="iti__country-list iti__hide"
                                                  id="iti-1__country-listbox"
                                                  role="listbox"
                                                  aria-label="List of countries">
                                                    <li
                                                      class="iti__country iti__preferred iti__active"
                                                      tabindex="-1"
                                                      id="iti-1__item-us-preferred"
                                                      role="option"
                                                      data-dial-code="1"
                                                      data-country-code="us"
                                                      aria-selected="true">
                                                        <div
                                                          class="iti__flag-box">
                                                            <div
                                                              class="iti__flag iti__us">
                                                            </div>
                                                        </div><span
                                                          class="iti__country-name">United
                                                            States</span><span
                                                          class="iti__dial-code">+1</span>
                                                    </li>
                                                    <li class="iti__divider"
                                                      role="separator"
                                                      aria-disabled="true"></li>
                                                    <li
                                                      class="iti__country iti__standard"
                                                      tabindex="-1"
                                                      id="iti-1__item-ca"
                                                      role="option"
                                                      data-dial-code="1"
                                                      data-country-code="ca"
                                                      aria-selected="false">
                                                        <div
                                                          class="iti__flag-box">
                                                            <div
                                                              class="iti__flag iti__ca">
                                                            </div>
                                                        </div><span
                                                          class="iti__country-name">Canada</span><span
                                                          class="iti__dial-code">+1</span>
                                                    </li>
                                                    <li
                                                      class="iti__country iti__standard"
                                                      tabindex="-1"
                                                      id="iti-1__item-us"
                                                      role="option"
                                                      data-dial-code="1"
                                                      data-country-code="us"
                                                      aria-selected="false">
                                                        <div
                                                          class="iti__flag-box">
                                                            <div
                                                              class="iti__flag iti__us">
                                                            </div>
                                                        </div><span
                                                          class="iti__country-name">United
                                                            States</span><span
                                                          class="iti__dial-code">+1</span>
                                                    </li>
                                                </ul>
                                            </div><input name=""
                                              id="input_6_2_raw" type="tel"
                                              value="" class="large"
                                              placeholder="###-###-####"
                                              aria-invalid="false"
                                              autocomplete="off"
                                              data-intl-tel-input-id="1"
                                              style="padding-left: 73px;"><input
                                              type="hidden" name="input_2"
                                              id="input_6_2">
                                        </div>
                                    </div>
                                </div>
                                <div id="field_6_3"
                                  class="gfield gfield--width-half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_3"><label
                                      class="gfield_label"
                                      for="input_6_3">Email<span
                                          class="gfield_required"><span
                                              class="gfield_required gfield_required_asterisk">*</span></span></label>
                                    <div
                                      class="ginput_container ginput_container_email">
                                        <input name="input_3" id="input_6_3"
                                          type="email" value="" class="large"
                                          aria-required="true"
                                          aria-invalid="false">
                                    </div>
                                </div>
                                <div id="field_6_7"
                                  class="gfield gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_7">
                                    <div
                                      class="ginput_container ginput_container_text">
                                        <input name="input_7" id="input_6_7"
                                          type="hidden" class="gform_hidden"
                                          aria-invalid="false"
                                          value="https://www.sellmyhousefast.com/sell-my-house-fast-online-quote/">
                                    </div>
                                </div>
                                <div id="field_6_8"
                                  class="gfield gfield--width-full gform_hidden field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_8">
                                    <div
                                      class="ginput_container ginput_container_text">
                                        <input name="input_8" id="input_6_8"
                                          type="hidden" class="gform_hidden"
                                          aria-invalid="false"
                                          value="FBAFB097-3B97-5E90-E9FD-DFAECD72774E">
                                    </div>
                                </div>
                                <div id="field_6_9"
                                  class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_hidden"
                                  data-js-reload="field_6_9"><input id="input_8"
                                      name="input_6_8" type="hidden" value="">
                                </div>
                                <div id="field_6_10"
                                  class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"
                                  data-js-reload="field_6_10"><label
                                      class="gfield_label"
                                      for="input_6_10">Name</label>
                                    <div class="ginput_container"><input
                                          name="input_10" id="input_6_10"
                                          type="text" value=""
                                          autocomplete="new-password"></div>
                                    <div class="gfield_description"
                                      id="gfield_description_6_10">This field is
                                        for validation purposes and should be
                                        left unchanged.</div>
                                </div>
                            </div>
                        </div>
                        <div class="gform_footer top_label"> 
                          <button class="xash-buton">Get My Cash Offer!</button>               
                        </div>
                    </form>
                </div>
                <iframe style="display:none;width:0px;height:0px;"
                  src="about:blank" name="gform_ajax_frame_6"
                  id="gform_ajax_frame_6"
                  title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe>
                <script>
                    gform.initializeOnLoaded( function() {gformInitSpinner( 6, '//www.sellmyhousefast.com/wp-content/plugins/gravityforms/images/spinner.svg' );jQuery('#gform_ajax_frame_6').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_6');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_6').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_6').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_6').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_6').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_6').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_6').val();gformInitSpinner( 6, '//www.sellmyhousefast.com/wp-content/plugins/gravityforms/images/spinner.svg' );jQuery(document).trigger('gform_page_loaded', [6, current_page]);window['gf_submitting_6'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_6').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_6').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [6]);window['gf_submitting_6'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_6').text());}, 50);}else{jQuery('#gform_6').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [6, current_page]);} );} );
                </script>
            </div>
            <p id="text_block-538-106"
              class="ct-text-block atomic-content-26-text">Or, you can give us a
                call!&nbsp;<a href="tel:844-207-0788" style="">(844)
                    207-0788</a><br></p>
        </div>
    </section>
    <section id="section-1524-106" class=" ct-section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-1594-106" class="ct-div-block"></div>
            <h2 id="headline-1529-106" class="ct-headline">Get Your <i>Sell My
                    House Fast</i> Online Quote</h2>
            <p id="text_block-1766-6078"
              class="ct-text-block atomic-content-26-text"><b><i>If you want an
                        online quote to sell your house for cash, Sell My House
                        Fast could be the best fit for you! Take control of your
                        situation and get back to living your life. Skip all of
                        the hassles and drawbacks of real estate agents when you
                        work with Sell My House Fast. There is no need to pay
                        fees and commission or make repairs or deal with house
                        showings when you choose to work together with us. We
                        are happy to make you a no obligation cash offer for
                        your home.</i> 🙂</b></p>
            <div id="div_block-1594-106" class="ct-div-block"></div>
            <div id="div_block-1710-6078" class="ct-div-block">
                <p id="text_block-1853-6078"
                  class="ct-text-block atomic-content-26-text"><i><b>Let’s get
                            your house sold stress free!</b></i></p>
            </div>
        </div>
    </section>
</div>
@endsection