import React, { useCallback, useEffect, useMemo, useState } from 'react';
import '../../../sass/app.scss';
import "./Table.scss";

export function Table({ tableData }) {
    // console.log(tableData);
    const [names, setNames] = useState([]);
    const [sortBy, setSortBy] = useState(null);

    useEffect(() => {
        // if (sortBy) {
        //     const preparedArray = [...tableData]
        //     .sort((prevElement, nextElement) =>
        //         nextElement.Merchant.localeCompare(prevElement.Merchant));
        //     setNames(preparedArray);
        // }
        // if (sortBy === false) {
        //     const preparedArray = [...tableData]
        //         .sort((prevElement, nextElement) =>
        //             prevElement.Merchant.localeCompare(nextElement.Merchant));
        //         setNames(preparedArray);
        // }
        // if (sortBy === null) {
        //     const preparedArray = [...tableData];
        //     setNames(preparedArray);
        // }

        switch (sortBy) {
            case 'alphabetically':
                const preparedSortByAlphabetically = [...tableData].sort((prevElement, nextElement) =>
                    prevElement.Merchant.localeCompare(nextElement.Merchant));
                setNames(preparedSortByAlphabetically);
                break;
            case 'reverseAlphabetically':
                const preparedSortReverseAlphabetically = [...tableData].sort((prevElement, nextElement) =>
                    nextElement.Merchant.localeCompare(prevElement.Merchant));
                setNames(preparedSortReverseAlphabetically);
                break;
            case 'category':
                const preparedSortByCategory = [...tableData].sort((prevElement, nextElement) =>
                    prevElement.Category.localeCompare(nextElement.Category));
                setNames(preparedSortByCategory);
                break;
            case 'reverseCategory':
                const preparedSortReverseCategory = [...tableData].sort((prevElement, nextElement) =>
                nextElement.Category.localeCompare(prevElement.Category));
                setNames(preparedSortReverseCategory);
                break;
            default:
                setNames(tableData);
        }

    }, [sortBy])

    const handleSortByMerchant = () => {
        if (sortBy !== 'alphabetically') {
            setSortBy('alphabetically');
            return;
        }
        setSortBy('reverseAlphabetically');
    }

    const handleSortByCategory = () => {
        if (sortBy !== 'category') {
            setSortBy('category');
            return;
        }
        setSortBy('reverseCategory');
    }

    console.log(sortBy);

    // const sortedData = useCallback((sortBy) => {
    //     switch (sortBy) {
    //         case true:
    //             return [...tableData]
    //                 .sort((prevElement, nextElement) =>
    //                     prevElement.Merchant.localeCompare(nextElement.Merchant));
    //         default:
    //             return tableData ;
    //     }
    // }, [tableData])

    // const preparedData = useMemo(() =>
    //     sortedData(sortBy), [sortedData, sortBy]
    // )
    // console.log(sortedData);
    // console.log(preparedData);

    // useEffect(async () => {
    //     const { Merchant } = tableData
    //     setNames(Merchant);
    // }, [])



    // console.log(tableData[5].Merchant);
    // const sortAlphabetically = () => {
    //     console.log(setNames(data))
    //     preparedData.sort((prevElement, nextElement) =>
    //             prevElement.Merchant.localeCompare(nextElement.Merchant))
    // }

    // console.log(sortAlphabetically);

    return (
        <>
            <table
                className="transactions__table table"
                cellPadding="20 0"
                cellSpacing="0"
            >
                <thead className="table__sortBy">
                        <tr className="table__title">
                            <th className="table__heading table__heading--checkbox">
                                <label htmlFor="table__rememberTr" className="table__rememberTr" />
                                <input
                                    id="table__rememberTr"
                                    className="table__checkboxTr checkboxTr"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </th>
                            <th className="table__heading table__heading--name">
                                <button
                                    type="button"
                                    onClick={() => ( (sortBy !== 'alphabetically')
                                        ? (setSortBy('alphabetically'))
                                        : (setSortBy('reverseAlphabetically'))
                                    )}
                                    className="table__headingText table__headingText--merchant"
                                >
                                    Merchant
                                </button>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--category">
                                <button
                                    type="button"
                                    onClick={() => ( (sortBy !== 'category')
                                        ? (setSortBy('category'))
                                        : (setSortBy('reverseCategory'))
                                    )}
                                    className="table__headingText"
                                >
                                    Category
                                </button>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--subCategory">
                                <div className="table__headingText">Sub-Category</div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--institution">
                                <div className="table__headingText">Institution</div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--account">
                                <div className="table__headingText">Account</div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--status">
                                <div className="table__headingText">Status</div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--date ">
                                <div className="table__headingText">Date </div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                            <th className="table__heading table__heading--amount">
                                <div className="table__headingText">Amount</div>
                                <div className="table__headingArrow">&#8595;</div>
                            </th>
                        </tr>
                </thead>
                <tbody className="table__sortedBy"  >
                    {names.map(data => (
                        <tr className="table__active" key={data.id}>
                            <td className="table__item table__item--checkbox">
                                <label htmlFor="table__rememberTd1" className="table__rememberTd" />
                                <input
                                    id="table__rememberTd1"
                                    className="table__checkboxTr checkboxTd"
                                    type="checkbox"
                                    name="terms"
                                    placeholder="check"
                                />
                            </td>
                            <td className="table__item table__item--name">
                                <img
                                    className="table__itemImage icon"
                                    src={data.MerchantImage}
                                    alt="Freepic"
                                />
                                <div className="table__itemName">{data.Merchant}</div>
                            </td>
                            <td className="table__item table__item table__item--category">{data.Category}</td>
                            <td className="table__item table__item--subCategory">
                                <img
                                    className="table__subImage icon"
                                    src={data.SubCategoryImage}
                                    alt="other category"
                                />
                                <div className="table__subText">{data.SubCategory}</div>
                            </td>
                            <td className="table__item table__item--institution">
                                <img
                                    className="table__chaseImage icon"
                                    src={data.InstitutionImage}
                                    alt="chase"
                                />
                                <div className="table__chaseText">{data.Institution}</div>
                            </td>
                            <td className="table__item table__item--account">{data.Account}</td>
                            <td className="table__item table__item--status">{data.Status}</td>
                            <td className="table__item table__item--date">{data.Date}</td>
                            <td className="table__item table__item--amount">
                                <div className="table__itemPrice">{data.Amount}</div>
                                <img
                                    className="table__eye icon"
                                    src={data.AmountEye}
                                    alt="eye"
                                />
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </>
    );
}
