import { computed, isRef } from 'vue'

export const useMonthlyPayment = (total, interestRate, duration) => {
    const monthlyInterestRate = computed(() => {
        return (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12
    })

    const numberOfPaymentMonths = computed(() => {
        return (isRef(duration) ? duration.value : duration) * 12
    })

    const principle = computed(() => {
        return isRef(total) ? total.value : total
    })

    const monthlyPayment = computed(() => {
        const P = principle.value
        const r = monthlyInterestRate.value
        const n = numberOfPaymentMonths.value

        const monthlyPayment = P * r / (1 - Math.pow(1 + r, -n))

        return monthlyPayment
    })

    const totalPaid = computed(() => {
        return monthlyPayment.value * numberOfPaymentMonths.value
    })

    const totalInterest = computed(() => {
        return totalPaid.value - principle.value
    })

    return { monthlyPayment, totalPaid, totalInterest }
}
