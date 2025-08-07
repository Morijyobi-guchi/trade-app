document.addEventListener("DOMContentLoaded", function () {
    const conditionRadios = document.querySelectorAll(
        'input[name="condition"]'
    );
    const tradeTypeCheckboxes = document.querySelectorAll(
        'input[name="trade_type[]"]'
    );
    const tradeCheckbox = document.querySelector(
        'input[name="trade_type[]"][value="trade"]'
    );
    const transferCheckbox = document.querySelector(
        'input[name="trade_type[]"][value="transfer"]'
    );

    function handleConditionChange() {
        const selectedCondition = document.querySelector(
            'input[name="condition"]:checked'
        );

        if (selectedCondition && selectedCondition.value === "used") {
            // 「交換できる物品を検索」が選択された場合
            // 交換のみをチェックし、譲渡のチェックを外す
            tradeCheckbox.checked = true;
            transferCheckbox.checked = false;

            // 両方のチェックボックスを無効化
            tradeCheckbox.disabled = true;
            transferCheckbox.disabled = true;

            // 視覚的スタイルを適用
            tradeCheckbox.parentElement.style.opacity = "0.7";
            tradeCheckbox.parentElement.style.cursor = "not-allowed";
            transferCheckbox.parentElement.style.opacity = "0.5";
            transferCheckbox.parentElement.style.cursor = "not-allowed";

            // 交換は選択済みであることを示すツールチップ的な表示
            tradeCheckbox.parentElement.title =
                "交換できる物品検索では交換が必須です";
            transferCheckbox.parentElement.title =
                "交換できる物品検索では譲渡は選択できません";
        } else {
            // 「欲しい物品を検索」が選択された場合は制限を解除
            tradeCheckbox.disabled = false;
            transferCheckbox.disabled = false;

            // スタイルを元に戻す
            tradeCheckbox.parentElement.style.opacity = "1";
            tradeCheckbox.parentElement.style.cursor = "pointer";
            transferCheckbox.parentElement.style.opacity = "1";
            transferCheckbox.parentElement.style.cursor = "pointer";

            // ツールチップを削除
            tradeCheckbox.parentElement.removeAttribute("title");
            transferCheckbox.parentElement.removeAttribute("title");
        }
    }

    // 各ラジオボタンにイベントリスナーを追加
    conditionRadios.forEach((radio) => {
        radio.addEventListener("change", handleConditionChange);
    });
});
